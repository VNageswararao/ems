select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016129016876221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016129016876221

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017330646514893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016129016876221

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017330646514893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016129016876221

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017330646514893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016129016876221

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017330646514893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016129016876221

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017330646514893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002129077911377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026209354400635

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020930767059326

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018689632415771

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016129016876221

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017330646514893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020689964294434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041818618774414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002129077911377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00055098533630371

SELECT *
FROM `examination`
WHERE `examination_id` = 319 
 Execution Time:0.0005791187286377

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00034809112548828

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00038504600524902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 277 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00035309791564941

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=319 
 Execution Time:0.006397008895874

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=319 
 Execution Time:0.0026710033416748

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=319 
 Execution Time:0.0022351741790771

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=319 
 Execution Time:0.00037002563476562

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='319' and office_id='1' 
 Execution Time:0.0046300888061523

select * from examination_chargesdetails where  examination_id= '319' 
 Execution Time:0.0017678737640381

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0035209655761719

SELECT *
FROM `examination`
WHERE `examination_id` = 300 
 Execution Time:0.005241870880127

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0037040710449219

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0027549266815186

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 321 
 Execution Time:0.004004955291748

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0038070678710938

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=300 
 Execution Time:0.0018389225006104

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=300 
 Execution Time:0.0039219856262207

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=300 
 Execution Time:0.0010221004486084

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=300 
 Execution Time:0.0032501220703125

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='300' and office_id='1' 
 Execution Time:0.0024788379669189

select * from examination_chargesdetails where  examination_id= '300' 
 Execution Time:0.0024359226226807

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0003669261932373

SELECT *
FROM `examination`
WHERE `examination_id` = 301 
 Execution Time:0.00057220458984375

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00027918815612793

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00023984909057617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 322 
 Execution Time:0.00032401084899902

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00018000602722168

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=301 
 Execution Time:0.00081682205200195

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=301 
 Execution Time:0.00057888031005859

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=301 
 Execution Time:0.00043988227844238

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=301 
 Execution Time:0.00034093856811523

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='301' and office_id='1' 
 Execution Time:0.00067400932312012

select * from examination_chargesdetails where  examination_id= '301' 
 Execution Time:0.00021910667419434

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00076198577880859

SELECT *
FROM `examination`
WHERE `examination_id` = 306 
 Execution Time:0.0010430812835693

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00044608116149902

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00060892105102539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 328 
 Execution Time:0.00037407875061035

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00022697448730469

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=306 
 Execution Time:0.0016269683837891

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=306 
 Execution Time:0.0020110607147217

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=306 
 Execution Time:0.0025119781494141

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=306 
 Execution Time:0.0024559497833252

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='306' and office_id='1' 
 Execution Time:0.0022740364074707

select * from examination_chargesdetails where  examination_id= '306' 
 Execution Time:0.00067591667175293

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00076198577880859

SELECT *
FROM `examination`
WHERE `examination_id` = 306 
 Execution Time:0.0010430812835693

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00044608116149902

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00060892105102539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 328 
 Execution Time:0.00037407875061035

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00022697448730469

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=306 
 Execution Time:0.0016269683837891

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=306 
 Execution Time:0.0020110607147217

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=306 
 Execution Time:0.0025119781494141

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=306 
 Execution Time:0.0024559497833252

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='306' and office_id='1' 
 Execution Time:0.0022740364074707

select * from examination_chargesdetails where  examination_id= '306' 
 Execution Time:0.00067591667175293

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0021669864654541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092411041259766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061297416687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048708915710449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085306167602539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select count(*) as cnt from patient_registration where  patient_registration_id= '246' and  office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from patient_registration where  patient_registration_id= '246' and  office_id= '1' 
 Execution Time:0.0004270076751709

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=246  
 Execution Time:0.0019419193267822

select count(*) as cnt from patient_registration where  patient_registration_id= '246' and  office_id= '1' 
 Execution Time:0.0004270076751709

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=246  
 Execution Time:0.0019419193267822

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=246  
 Execution Time:0.00069999694824219

select count(*) as cnt from patient_registration where  patient_registration_id= '246' and  office_id= '1' 
 Execution Time:0.0004270076751709

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=246  
 Execution Time:0.0019419193267822

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=246  
 Execution Time:0.00069999694824219

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='246' and  office_id= '1' 
 Execution Time:0.0002140998840332

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00098395347595215

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00098395347595215

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026030540466309

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026030540466309

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026030540466309

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002446174621582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 321 
 Execution Time:0.00086092948913574

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 347 
 Execution Time:0.00039505958557129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 347  and `patient_registration_id` = 321 
 Execution Time:0.0018160343170166

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 321 
 Execution Time:0.0012409687042236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010180473327637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010180473327637

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00057792663574219

select * from examination where examination_id= '300' and   office_id= '1' 
 Execution Time:0.00090599060058594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 300 
 Execution Time:0.0006101131439209

select * from examination_chargesdetails where  examination_id= '300' 
 Execution Time:0.00054788589477539

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021519660949707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021519660949707

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027990341186523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 246 
 Execution Time:0.00040197372436523

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 264 
 Execution Time:0.00024604797363281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 264  and `patient_registration_id` = 246 
 Execution Time:0.0002138614654541

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 246 
 Execution Time:0.00097393989562988

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013518333435059

select * from examination where examination_id= '226' and   office_id= '1' 
 Execution Time:0.0006558895111084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 226 
 Execution Time:0.00068402290344238

select * from examination_chargesdetails where  examination_id= '226' 
 Execution Time:0.00035500526428223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008089542388916

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008089542388916

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024580955505371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066685676574707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066685676574707

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0034351348876953

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0034351348876953

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00030183792114258

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00094795227050781

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010490417480469

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010490417480469

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='32' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0012261867523193

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='32' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0012261867523193

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002601146697998

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='32' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0012261867523193

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002601146697998

select user_id,name from  user where user_type=6 
 Execution Time:0.00017309188842773

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='32' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0012261867523193

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.0002601146697998

select user_id,name from  user where user_type=6 
 Execution Time:0.00017309188842773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00034999847412109

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0018200874328613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00099492073059082

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0046448707580566

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0046448707580566

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00026798248291016

select laser_id , name,amount from  laser where department_id=6 and office_id=1 
 Execution Time:0.0003669261932373

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011019706726074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='3' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0009000301361084

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='3' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0009000301361084

select laser_id , name,amount from  laser where department_id=6 and laser_id=1 and office_id=1 
 Execution Time:0.00031113624572754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 234 
 Execution Time:0.00030303001403809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 251 
 Execution Time:0.00022792816162109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 251  and `patient_registration_id` = 234 
 Execution Time:0.00029206275939941

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 234 
 Execution Time:0.00058603286743164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051784515380859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051784515380859

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023794174194336

select * from examination where examination_id= '211' and   office_id= '1' 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 211 
 Execution Time:0.00029110908508301

select * from examination_chargesdetails where  examination_id= '211' 
 Execution Time:0.00031089782714844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059390068054199

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059390068054199

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037002563476562

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00060582160949707

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00060582160949707

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00040984153747559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007469654083252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 65 
 Execution Time:0.00023102760314941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 69 
 Execution Time:0.00015783309936523

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 69  and `patient_registration_id` = 65 
 Execution Time:0.00050187110900879

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 65 
 Execution Time:0.00087189674377441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select * from examination where examination_id= '64' and   office_id= '1' 
 Execution Time:0.0010871887207031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 64 
 Execution Time:0.00079703330993652

select * from examination_chargesdetails where  examination_id= '64' 
 Execution Time:0.00043892860412598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049614906311035

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049614906311035

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032210350036621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00084805488586426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00084805488586426

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033998489379883

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00088000297546387

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00088000297546387

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00065207481384277

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00072503089904785

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011799335479736

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011799335479736

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.00088286399841309

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011799335479736

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.00088286399841309

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.00027012825012207

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='34' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00081396102905273

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='34' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00081396102905273

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.00052213668823242

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='34' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00081396102905273

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.00052213668823242

select user_id,name from  user where user_type=6 
 Execution Time:0.00024700164794922

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='34' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00081396102905273

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.00052213668823242

select user_id,name from  user where user_type=6 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00030112266540527

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00030112266540527

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00021696090698242

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0012259483337402

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0007479190826416

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0007479190826416

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.00023388862609863

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='33' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0011379718780518

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='33' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0011379718780518

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.0007331371307373

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='33' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0011379718780518

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.0007331371307373

select user_id,name from  user where user_type=6 
 Execution Time:0.00067591667175293

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='33' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0011379718780518

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.0007331371307373

select user_id,name from  user where user_type=6 
 Execution Time:0.00067591667175293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00071477890014648

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00054192543029785

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00054192543029785

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00018405914306641

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00022220611572266

select laser_id , name,amount from  laser where department_id=6 and office_id=1 
 Execution Time:0.00052595138549805

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00057196617126465

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0009160041809082

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00077390670776367

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0014491081237793

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0009300708770752

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0009300708770752

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='34' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00071477890014648

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='34' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00071477890014648

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.00022602081298828

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='34' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00071477890014648

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.00022602081298828

select user_id,name from  user where user_type=6 
 Execution Time:0.0001680850982666

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='34' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00071477890014648

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.00022602081298828

select user_id,name from  user where user_type=6 
 Execution Time:0.0001680850982666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0004429817199707

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0004429817199707

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00028896331787109

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017631053924561

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017631053924561

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.013314962387085

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017631053924561

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.013314962387085

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.0014321804046631

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00047588348388672

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00047588348388672

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.0002601146697998

select laser_id , name,amount from  laser where department_id=6 and office_id=1 
 Execution Time:0.0005791187286377

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00060391426086426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00011205673217773

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='3' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00096607208251953

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='3' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00096607208251953

select laser_id , name,amount from  laser where department_id=6 and laser_id=1 and office_id=1 
 Execution Time:0.00026607513427734

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='3' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00096607208251953

select laser_id , name,amount from  laser where department_id=6 and laser_id=1 and office_id=1 
 Execution Time:0.00026607513427734

select laser_id , name,amount from  laser where department_id=6 and laser_id=1 and office_id=1 
 Execution Time:0.00014615058898926

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='3' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00096607208251953

select laser_id , name,amount from  laser where department_id=6 and laser_id=1 and office_id=1 
 Execution Time:0.00026607513427734

select laser_id , name,amount from  laser where department_id=6 and laser_id=1 and office_id=1 
 Execution Time:0.00014615058898926

select laser_id , name,amount from  laser where department_id=6 and laser_id=2 and office_id=1 
 Execution Time:0.00010991096496582

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0012111663818359

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='4' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00053787231445312

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00011301040649414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00084114074707031

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 246 
 Execution Time:0.00021719932556152

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 368 
 Execution Time:0.00029897689819336

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 368  and `patient_registration_id` = 246 
 Execution Time:0.0005958080291748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041294097900391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023603439331055

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00085115432739258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00085115432739258

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082087516784668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082087516784668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082087516784668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010170936584473

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 341 
 Execution Time:0.00030088424682617

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 369 
 Execution Time:0.00021719932556152

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 369  and `patient_registration_id` = 341 
 Execution Time:0.00056099891662598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095009803771973

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002439022064209

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.002777099609375

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0005950927734375

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0005950927734375

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0025310516357422

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0005950927734375

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0025310516357422

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.000762939453125

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0005950927734375

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0025310516357422

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.000762939453125

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='234' and  office_id= '1' 
 Execution Time:0.00021910667419434

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042200088500977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034594535827637

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select count(*) as cnt from medicine where  name = 'C D    ONITMENT' and office_id= '1' 
 Execution Time:0.00063204765319824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 341 
 Execution Time:0.00025296211242676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 369 
 Execution Time:0.00020694732666016

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 369  and `patient_registration_id` = 341 
 Execution Time:0.00031185150146484

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 341 
 Execution Time:0.00079488754272461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select * from examination where examination_id= '322' and   office_id= '1' 
 Execution Time:0.00060892105102539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074291229248047

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 322 
 Execution Time:0.00046801567077637

select * from examination_chargesdetails where  examination_id= '322' 
 Execution Time:0.00029397010803223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010108947753906

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010108947753906

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043797492980957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00096797943115234

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00096797943115234

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='10' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064301490783691

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='8' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00052690505981445

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00034308433532715

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='97' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00044393539428711

select count(*) as cnt from patient_registration where  patient_registration_id= '65' and  office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from patient_registration where  patient_registration_id= '65' and  office_id= '1' 
 Execution Time:0.00030303001403809

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=65  
 Execution Time:0.0017640590667725

select count(*) as cnt from patient_registration where  patient_registration_id= '65' and  office_id= '1' 
 Execution Time:0.00030303001403809

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=65  
 Execution Time:0.0017640590667725

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=65  
 Execution Time:0.00040483474731445

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017461776733398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017461776733398

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073719024658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017461776733398

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073719024658203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003058910369873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017461776733398

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073719024658203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093388557434082

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select count(*) as cnt from patient_registration where  patient_registration_id= '65' and  office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_registration where  patient_registration_id= '65' and  office_id= '1' 
 Execution Time:0.00037598609924316

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=65  
 Execution Time:0.0028939247131348

select count(*) as cnt from patient_registration where  patient_registration_id= '65' and  office_id= '1' 
 Execution Time:0.00037598609924316

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=65  
 Execution Time:0.0028939247131348

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=65  
 Execution Time:0.00071907043457031

select count(*) as cnt from patient_registration where  patient_registration_id= '64' and  office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from patient_registration where  patient_registration_id= '64' and  office_id= '1' 
 Execution Time:0.0004420280456543

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=64  
 Execution Time:0.0016300678253174

select count(*) as cnt from patient_registration where  patient_registration_id= '64' and  office_id= '1' 
 Execution Time:0.0004420280456543

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=64  
 Execution Time:0.0016300678253174

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=64  
 Execution Time:0.00039815902709961

select count(*) as cnt from patient_registration where  patient_registration_id= '64' and  office_id= '1' 
 Execution Time:0.0004420280456543

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=64  
 Execution Time:0.0016300678253174

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=64  
 Execution Time:0.00039815902709961

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='64' and  office_id= '1' 
 Execution Time:0.0018110275268555

select count(*) as cnt from patient_registration where  patient_registration_id= '65' and  office_id= '1' 
 Execution Time:0.00078988075256348

select count(*) as cnt from patient_registration where  patient_registration_id= '65' and  office_id= '1' 
 Execution Time:0.00078988075256348

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=65  
 Execution Time:0.0026340484619141

select count(*) as cnt from patient_registration where  patient_registration_id= '65' and  office_id= '1' 
 Execution Time:0.00078988075256348

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=65  
 Execution Time:0.0026340484619141

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=65  
 Execution Time:0.001133918762207

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00062298774719238

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00062298774719238

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

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
		where billing=0 and appointment_date between  '2022-02-18' and '2022-03-18' and  patient_registration.office_id= 1      
 Execution Time:0.0067880153656006

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
		where billing=0 and appointment_date between  '2022-02-18' and '2022-02-18' and  patient_registration.office_id= 1      
 Execution Time:0.0021419525146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009310245513916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043582916259766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009310245513916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096511840820312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

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
		where billing=0 and appointment_date between  '2022-02-13' and '2022-03-08' and  patient_registration.office_id= 1      
 Execution Time:0.0056149959564209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041317939758301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015902519226074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041317939758301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010099411010742

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010099411010742

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021910667419434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025520324707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025520324707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025520324707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025520324707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008389949798584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022010803222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025520324707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008389949798584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032401084899902

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024199485778809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058913230895996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058913230895996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027799606323242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075602531433105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027608871459961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075602531433105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0027251243591309

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00059390068054199

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00059390068054199

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0018160343170166

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00059390068054199

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0018160343170166

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.0004880428314209

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00059390068054199

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0018160343170166

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.0004880428314209

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='342' and  office_id= '1' 
 Execution Time:0.00016403198242188

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089001655578613

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00089001655578613

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021929740905762

select * from opdcharge where  opdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.00086879730224609

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011038780212402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0036730766296387

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0036730766296387

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00074100494384766

select count(*) as cnt from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00034809112548828

select * from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00032806396484375

select count(*) as cnt from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00034809112548828

select * from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00032806396484375

select * from billing_detail where  billing_master_id= '11' 
 Execution Time:0.0004279613494873

select count(*) as cnt from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00034809112548828

select * from billing_master where  billing_master_id= '11' and  office_id= '1' 
 Execution Time:0.00032806396484375

select * from billing_detail where  billing_master_id= '11' 
 Execution Time:0.0004279613494873

select * from opdcharge where  opdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.00021100044250488

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00042486190795898

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00042486190795898

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0030319690704346

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00042486190795898

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0030319690704346

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.0005640983581543

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00042486190795898

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0030319690704346

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.0005640983581543

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='342' and  office_id= '1' 
 Execution Time:0.0002140998840332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086092948913574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00086092948913574

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031709671020508

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045108795166016

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045108795166016

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033116340637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select count(*) as cnt from opdcharge where  name = 'Review Consultation' and office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from opdcharge where  name = 'Review Paid Consultation' and office_id= '1' 
 Execution Time:0.00089907646179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080704689025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080704689025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080704689025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00053882598876953

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00053882598876953

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0021300315856934

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00053882598876953

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0021300315856934

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.00049185752868652

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00053882598876953

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0021300315856934

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.00049185752868652

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='342' and  office_id= '1' 
 Execution Time:0.00016498565673828

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00043416023254395

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00043416023254395

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0027749538421631

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00043416023254395

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0027749538421631

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.0005791187286377

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00043416023254395

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0027749538421631

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.0005791187286377

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='342' and  office_id= '1' 
 Execution Time:0.00019001960754395

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031304359436035

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select * from opdcharge where  opdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00039887428283691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.0018420219421387

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.0018420219421387

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0019400119781494

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.0018420219421387

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0019400119781494

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.0005800724029541

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.0018420219421387

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0019400119781494

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.0005800724029541

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='342' and  office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00045895576477051

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0017750263214111

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00045895576477051

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0017750263214111

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.00050616264343262

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00045895576477051

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0017750263214111

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.00050616264343262

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='342' and  office_id= '1' 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-08' and  '2022-03-08' and  billing_master.office_id= 1        
 Execution Time:0.00082898139953613

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-08' and  '2022-03-08' and  billing_master.office_id= 1        
 Execution Time:0.00082898139953613

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
		where billing=0 and appointment_date between  '2022-03-08' and '2022-03-08' and  patient_registration.office_id= 1      
 Execution Time:0.001816987991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004730224609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015320777893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025081634521484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004730224609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015320777893066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085711479187012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00032591819763184

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0011739730834961

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00032591819763184

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0011739730834961

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.00042295455932617

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00032591819763184

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0011739730834961

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.00042295455932617

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='342' and  office_id= '1' 
 Execution Time:0.00018191337585449

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00050497055053711

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0016860961914062

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00050497055053711

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0016860961914062

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.00055098533630371

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00050497055053711

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0016860961914062

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.00055098533630371

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='342' and  office_id= '1' 
 Execution Time:0.00018715858459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001079797744751

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001079797744751

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001079797744751

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001079797744751

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-08' and  '2022-03-08' and  billing_master.office_id= 1        
 Execution Time:0.00082182884216309

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-08' and  '2022-03-08' and  billing_master.office_id= 1        
 Execution Time:0.00082182884216309

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
		where billing=0 and appointment_date between  '2022-03-08' and '2022-03-08' and  patient_registration.office_id= 1      
 Execution Time:0.0020310878753662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014162063598633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014162063598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036716461181641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005958080291748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005958080291748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005958080291748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 234 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 370 
 Execution Time:0.00022602081298828

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 370  and `patient_registration_id` = 234 
 Execution Time:0.00054812431335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063991546630859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063991546630859

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022792816162109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010001659393311

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 342 
 Execution Time:0.00022792816162109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 371 
 Execution Time:0.00015807151794434

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 371  and `patient_registration_id` = 342 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014019012451172

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081706047058105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081706047058105

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00039911270141602

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034308433532715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034308433532715

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010268688201904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021505355834961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010268688201904

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075387954711914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 343 
 Execution Time:0.00028014183044434

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 372 
 Execution Time:0.00025296211242676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 372  and `patient_registration_id` = 343 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059700012207031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059700012207031

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020217895507812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053715705871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053715705871582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043892860412598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053715705871582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.0010299682617188

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.0010299682617188

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0026030540466309

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.0010299682617188

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0026030540466309

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.0010659694671631

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.0010299682617188

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0026030540466309

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.0010659694671631

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='342' and  office_id= '1' 
 Execution Time:0.00017690658569336

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0015120506286621

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0015120506286621

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00035309791564941

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.00045490264892578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004565954208374

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004565954208374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029559135437012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004565954208374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029559135437012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0065059661865234

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004565954208374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029559135437012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0065059661865234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038399696350098

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004565954208374

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029559135437012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0065059661865234

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038399696350098

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00061678886413574

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00061678886413574

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.016602039337158

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00061678886413574

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.016602039337158

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.0055670738220215

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00061678886413574

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.016602039337158

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.0055670738220215

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='234' and  office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0006101131439209

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0006101131439209

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0033118724822998

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0006101131439209

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0033118724822998

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.0010559558868408

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0006101131439209

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0033118724822998

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.0010559558868408

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='234' and  office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00083398818969727

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00083398818969727

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.0011730194091797

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.00094389915466309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021219253540039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021219253540039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021219253540039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021219253540039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021219253540039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021219253540039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011270046234131

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011270046234131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011270046234131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011270046234131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011270046234131

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0028140544891357

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0028140544891357

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0061850547790527

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0028140544891357

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0061850547790527

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.0038630962371826

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0028140544891357

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0061850547790527

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.0038630962371826

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='234' and  office_id= '1' 
 Execution Time:0.003680944442749

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.013962984085083

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.013962984085083

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0045459270477295

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.013962984085083

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0045459270477295

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.0020759105682373

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.013962984085083

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0045459270477295

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.0020759105682373

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='234' and  office_id= '1' 
 Execution Time:0.00718092918396

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0007328987121582

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0007328987121582

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00030899047851562

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.00043606758117676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 343 
 Execution Time:0.00031399726867676

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 372 
 Execution Time:0.00033688545227051

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 372  and `patient_registration_id` = 343 
 Execution Time:0.00024700164794922

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 343 
 Execution Time:0.0011451244354248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select * from examination where examination_id= '325' and   office_id= '1' 
 Execution Time:0.00079679489135742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 325 
 Execution Time:0.00038504600524902

select * from examination_chargesdetails where  examination_id= '325' 
 Execution Time:0.00031614303588867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060105323791504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060105323791504

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078296661376953

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078296661376953

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035214424133301

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00073099136352539

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00058102607727051

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='40' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00058507919311523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 286 
 Execution Time:0.00029301643371582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 307 
 Execution Time:0.0002129077911377

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 307  and `patient_registration_id` = 286 
 Execution Time:0.00039911270141602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 286 
 Execution Time:0.0010039806365967

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select * from examination where examination_id= '268' and   office_id= '1' 
 Execution Time:0.00075387954711914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 268 
 Execution Time:0.00029587745666504

select * from examination_chargesdetails where  examination_id= '268' 
 Execution Time:0.00037312507629395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056791305541992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056791305541992

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011470317840576

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011470317840576

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047111511230469

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00055408477783203

SELECT *
FROM `examination`
WHERE `examination_id` = 268 
 Execution Time:0.00049400329589844

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00031399726867676

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00025105476379395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 286 
 Execution Time:0.00029897689819336

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00022697448730469

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=268 
 Execution Time:0.00063991546630859

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=268 
 Execution Time:0.00028300285339355

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=268 
 Execution Time:0.00023722648620605

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=268 
 Execution Time:0.00033998489379883

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='268' and office_id='1' 
 Execution Time:0.00090289115905762

select * from examination_chargesdetails where  examination_id= '268' 
 Execution Time:0.00025606155395508

select * from examination where examination_id= '268' and   office_id= '1' 
 Execution Time:0.00078797340393066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 268 
 Execution Time:0.002877950668335

select * from examination_chargesdetails where  examination_id= '268' 
 Execution Time:0.00037980079650879

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011970996856689

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007932186126709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 286 
 Execution Time:0.00023794174194336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 307 
 Execution Time:0.00017189979553223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 307  and `patient_registration_id` = 286 
 Execution Time:0.00050711631774902

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 286 
 Execution Time:0.00084090232849121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select * from examination where examination_id= '268' and   office_id= '1' 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 268 
 Execution Time:0.00062799453735352

select * from examination_chargesdetails where  examination_id= '268' 
 Execution Time:0.00028491020202637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042080879211426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042080879211426

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026202201843262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084280967712402

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00084280967712402

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007169246673584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 286 
 Execution Time:0.00026893615722656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 307 
 Execution Time:0.00021004676818848

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 307  and `patient_registration_id` = 286 
 Execution Time:0.00054383277893066

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 286 
 Execution Time:0.00071597099304199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select * from examination where examination_id= '268' and   office_id= '1' 
 Execution Time:0.00079512596130371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012450218200684

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 268 
 Execution Time:0.00044393539428711

select * from examination_chargesdetails where  examination_id= '268' 
 Execution Time:0.00042414665222168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046992301940918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046992301940918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029897689819336

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0005950927734375

SELECT *
FROM `examination`
WHERE `examination_id` = 268 
 Execution Time:0.00057411193847656

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00023388862609863

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00039196014404297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 286 
 Execution Time:0.00026106834411621

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.0003659725189209

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=268 
 Execution Time:0.00066399574279785

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=268 
 Execution Time:0.00037002563476562

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=268 
 Execution Time:0.00034093856811523

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='268' and office_id='1' 
 Execution Time:0.00058197975158691

select * from examination_chargesdetails where  examination_id= '268' 
 Execution Time:0.00031518936157227

select * from examination where examination_id= '268' and   office_id= '1' 
 Execution Time:0.00091910362243652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 268 
 Execution Time:0.00028085708618164

select * from examination_chargesdetails where  examination_id= '268' 
 Execution Time:0.00021696090698242

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00047898292541504

SELECT *
FROM `examination`
WHERE `examination_id` = 268 
 Execution Time:0.00054788589477539

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00028181076049805

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00034904479980469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 286 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00033116340637207

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=268 
 Execution Time:0.0017650127410889

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=268 
 Execution Time:0.00056099891662598

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=268 
 Execution Time:0.0003352165222168

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=268 
 Execution Time:0.00033712387084961

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='268' and office_id='1' 
 Execution Time:0.00058889389038086

select * from examination_chargesdetails where  examination_id= '268' 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001533031463623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001533031463623

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050616264343262

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050616264343262

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006558895111084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006558895111084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0027999877929688

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0027999877929688

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0028948783874512

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006251335144043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006251335144043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057816505432129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057816505432129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057816505432129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015368461608887

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015368461608887

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015368461608887

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 246 
 Execution Time:0.0017421245574951

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 368 
 Execution Time:0.0004580020904541

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 368  and `patient_registration_id` = 246 
 Execution Time:0.0011498928070068

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 246 
 Execution Time:0.0013580322265625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select * from examination where examination_id= '321' and   office_id= '1' 
 Execution Time:0.0020561218261719

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 321 
 Execution Time:0.00075984001159668

select * from examination_chargesdetails where  examination_id= '321' 
 Execution Time:0.0015192031860352

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051689147949219

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051689147949219

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031805038452148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015370845794678

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015370845794678

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047087669372559

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010240077972412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019090175628662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019090175628662

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0016422271728516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019090175628662

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0016422271728516

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.002781867980957

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010747909545898

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00055694580078125

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0035929679870605

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00055694580078125

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0035929679870605

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.00088787078857422

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00055694580078125

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0035929679870605

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.00088787078857422

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='234' and  office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0012049674987793

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0012049674987793

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00037002563476562

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071811676025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071811676025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011968612670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071811676025391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011968612670898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099301338195801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0003659725189209

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0036280155181885

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0003659725189209

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0036280155181885

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.00089502334594727

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0003659725189209

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0036280155181885

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.00089502334594727

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='234' and  office_id= '1' 
 Execution Time:0.00020003318786621

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00038313865661621

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0019941329956055

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00038313865661621

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0019941329956055

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.0004889965057373

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00038313865661621

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0019941329956055

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.0004889965057373

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='234' and  office_id= '1' 
 Execution Time:0.0002140998840332

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00068807601928711

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00068807601928711

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00033211708068848

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.0034041404724121

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00093698501586914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011560916900635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036478042602539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0004429817199707

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0023589134216309

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0004429817199707

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0023589134216309

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.00094318389892578

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.0004429817199707

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0023589134216309

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.00094318389892578

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='234' and  office_id= '1' 
 Execution Time:0.0002129077911377

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00039887428283691

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00039887428283691

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0016839504241943

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00039887428283691

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0016839504241943

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.00051498413085938

select count(*) as cnt from patient_registration where  patient_registration_id= '234' and  office_id= '1' 
 Execution Time:0.00039887428283691

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=234  
 Execution Time:0.0016839504241943

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=234  
 Execution Time:0.00051498413085938

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='234' and  office_id= '1' 
 Execution Time:0.00021600723266602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 234 
 Execution Time:0.00023007392883301

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 370 
 Execution Time:0.00033903121948242

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 370  and `patient_registration_id` = 234 
 Execution Time:0.00048112869262695

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 234 
 Execution Time:0.00077295303344727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select * from examination where examination_id= '323' and   office_id= '1' 
 Execution Time:0.00089192390441895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 323 
 Execution Time:0.00038599967956543

select * from examination_chargesdetails where  examination_id= '323' 
 Execution Time:0.00023508071899414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050115585327148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050115585327148

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005490779876709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005490779876709

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024914741516113

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062990188598633

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00044488906860352

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062990188598633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 342 
 Execution Time:0.00030708312988281

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 371 
 Execution Time:0.00027298927307129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 371  and `patient_registration_id` = 342 
 Execution Time:0.00029706954956055

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 342 
 Execution Time:0.00093507766723633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063300132751465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063300132751465

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052309036254883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052309036254883

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select * from examination where examination_id= '324' and   office_id= '1' 
 Execution Time:0.00094985961914062

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 324 
 Execution Time:0.00041103363037109

select * from examination_chargesdetails where  examination_id= '324' 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025711059570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025711059570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025711059570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018608570098877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025711059570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018608570098877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027880668640137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025711059570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018608570098877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027880668640137

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025491714477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025711059570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018608570098877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027880668640137

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025491714477539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011649131774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025711059570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018608570098877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027880668640137

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025491714477539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011649131774902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018529891967773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025711059570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018608570098877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027880668640137

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025491714477539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011649131774902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018529891967773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056219100952148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025711059570312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018608570098877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027880668640137

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025491714477539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011649131774902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0018529891967773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010719299316406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043201446533203

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018129348754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018129348754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018129348754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018129348754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010340213775635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018129348754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010340213775635

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038249492645264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018129348754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010340213775635

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012459754943848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00050902366638184

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='38' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0003659725189209

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00078582763671875

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='64' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0036370754241943

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='70' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00062799453735352

select count(*) as cnt from patient_registration where  patient_registration_id= '246' and  office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from patient_registration where  patient_registration_id= '246' and  office_id= '1' 
 Execution Time:0.00040507316589355

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=246  
 Execution Time:0.00201416015625

select count(*) as cnt from patient_registration where  patient_registration_id= '246' and  office_id= '1' 
 Execution Time:0.00040507316589355

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=246  
 Execution Time:0.00201416015625

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=246  
 Execution Time:0.00070905685424805

select count(*) as cnt from patient_registration where  patient_registration_id= '246' and  office_id= '1' 
 Execution Time:0.00040507316589355

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=246  
 Execution Time:0.00201416015625

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=246  
 Execution Time:0.00070905685424805

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='246' and  office_id= '1' 
 Execution Time:0.00017309188842773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select count(*) as cnt from patient_registration where  patient_registration_id= '246' and  office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from patient_registration where  patient_registration_id= '246' and  office_id= '1' 
 Execution Time:0.00033211708068848

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=246  
 Execution Time:0.0012400150299072

select count(*) as cnt from patient_registration where  patient_registration_id= '246' and  office_id= '1' 
 Execution Time:0.00033211708068848

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=246  
 Execution Time:0.0012400150299072

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=246  
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_registration where  patient_registration_id= '246' and  office_id= '1' 
 Execution Time:0.00033211708068848

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=246  
 Execution Time:0.0012400150299072

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=246  
 Execution Time:0.0003349781036377

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='246' and  office_id= '1' 
 Execution Time:0.00019001960754395

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00040388107299805

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00040388107299805

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00035309791564941

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.00067496299743652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071597099304199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071597099304199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093793869018555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024690628051758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024690628051758

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024690628051758

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024690628051758

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018789768218994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024690628051758

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018789768218994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018658638000488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024690628051758

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018789768218994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018658638000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024690628051758

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018789768218994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018658638000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024690628051758

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018789768218994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018658638000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020978450775146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024690628051758

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018789768218994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018658638000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020978450775146

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024690628051758

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018789768218994

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018658638000488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020978450775146

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017158985137939

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009911060333252

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0029551982879639

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='3' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0015490055084229

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075817108154297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00080013275146484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00068306922912598

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00068306922912598

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00039100646972656

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00062298774719238

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00062298774719238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055384635925293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014598369598389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040292739868164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055384635925293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014598369598389

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00050187110900879

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00050187110900879

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00061798095703125

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00050997734069824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0020232200622559

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00050997734069824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0020232200622559

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00080990791320801

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00050997734069824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=2  
 Execution Time:0.0020232200622559

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=2  
 Execution Time:0.00080990791320801

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00026512145996094

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066184997558594

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066184997558594

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036406517028809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00098085403442383

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00065279006958008

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00098085403442383

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 345 
 Execution Time:0.00071883201599121

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 374 
 Execution Time:0.00065279006958008

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 374  and `patient_registration_id` = 345 
 Execution Time:0.00052213668823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00090694427490234

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00090694427490234

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043201446533203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063800811767578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091695785522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091695785522461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026581287384033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091695785522461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026581287384033

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091695785522461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026581287384033

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091695785522461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026581287384033

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00091695785522461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026581287384033

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091099739074707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001971960067749

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025229454040527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025448799133301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025229454040527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025448799133301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0040910243988037

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025229454040527

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025448799133301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0040910243988037

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00051999092102051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 237 
 Execution Time:0.00026416778564453

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 237  and `patient_registration_id` = 184 
 Execution Time:0.003087043762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032598972320557

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032598972320557

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005340576171875

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049185752868652

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092697143554688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092697143554688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008702278137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008702278137207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008702278137207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008702278137207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008702278137207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008702278137207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008702278137207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082921981811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008702278137207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082921981811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008702278137207

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082921981811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0055100917816162

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041007995605469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062203407287598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062203407287598

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018620491027832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081586837768555

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00026202201843262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 237 
 Execution Time:0.00022006034851074

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 237  and `patient_registration_id` = 184 
 Execution Time:0.0003509521484375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 184 
 Execution Time:0.00083804130554199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052404403686523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052404403686523

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034189224243164

select * from examination where examination_id= '89' and   office_id= '1' 
 Execution Time:0.0008552074432373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078511238098145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 89 
 Execution Time:0.004274845123291

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.002540111541748

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024950504302979

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0024950504302979

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00031208992004395

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 237 
 Execution Time:0.00021696090698242

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 237  and `patient_registration_id` = 184 
 Execution Time:0.00038599967956543

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 184 
 Execution Time:0.00059914588928223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017404556274414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061297416687012

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035405158996582

select * from examination where examination_id= '89' and   office_id= '1' 
 Execution Time:0.00080513954162598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 89 
 Execution Time:0.0055220127105713

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.00089716911315918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067806243896484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067806243896484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040578842163086

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00064492225646973

SELECT *
FROM `examination`
WHERE `examination_id` = 89 
 Execution Time:0.0008690357208252

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00037693977355957

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00036311149597168

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00027680397033691

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00030398368835449

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=89 
 Execution Time:0.00075292587280273

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=89 
 Execution Time:0.00070285797119141

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=89 
 Execution Time:0.0005791187286377

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=89 
 Execution Time:0.00050091743469238

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='89' and office_id='1' 
 Execution Time:0.00074315071105957

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.00026297569274902

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00063800811767578

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00021719932556152

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005338191986084

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005338191986084

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062108039855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087380409240723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062108039855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087380409240723

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020279884338379

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00079107284545898

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00062012672424316

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0031991004943848

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0031991004943848

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.0004570484161377

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0025370121002197

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0025370121002197

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00037407875061035

SELECT *
FROM `examination`
WHERE `examination_id` = 89 
 Execution Time:0.000762939453125

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00051689147949219

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.0002439022064209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00037789344787598

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00038409233093262

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=89 
 Execution Time:0.0004889965057373

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=89 
 Execution Time:0.00043392181396484

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=89 
 Execution Time:0.00035881996154785

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=89 
 Execution Time:0.00022792816162109

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='89' and office_id='1' 
 Execution Time:0.00048589706420898

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.00015711784362793

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0028960704803467

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028777122497559

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 237 
 Execution Time:0.00025200843811035

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 237  and `patient_registration_id` = 184 
 Execution Time:0.00021195411682129

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 184 
 Execution Time:0.00050497055053711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select * from examination where examination_id= '89' and   office_id= '1' 
 Execution Time:0.00087785720825195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 89 
 Execution Time:0.00032305717468262

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.00064206123352051

select * from examination where examination_id= '89' and   office_id= '1' 
 Execution Time:0.00087785720825195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 89 
 Execution Time:0.00032305717468262

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.00064206123352051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00044012069702148

select * from examination where examination_id= '89' and   office_id= '1' 
 Execution Time:0.00087785720825195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 89 
 Execution Time:0.00032305717468262

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.00064206123352051

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00044012069702148

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00021910667419434

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044679641723633

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053906440734863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053906440734863

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036406517028809

SELECT *
FROM `examination`
WHERE `examination_id` = 89 
 Execution Time:0.00048589706420898

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00050997734069824

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00046300888061523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00033020973205566

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.000244140625

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=89 
 Execution Time:0.0009911060333252

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=89 
 Execution Time:0.00053906440734863

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=89 
 Execution Time:0.0004420280456543

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=89 
 Execution Time:0.00045394897460938

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='89' and office_id='1' 
 Execution Time:0.00044393539428711

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.00021100044250488

SELECT *
FROM `examination`
WHERE `examination_id` = 89 
 Execution Time:0.00048589706420898

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00050997734069824

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00046300888061523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00033020973205566

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.000244140625

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=89 
 Execution Time:0.0009911060333252

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=89 
 Execution Time:0.00053906440734863

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=89 
 Execution Time:0.0004420280456543

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=89 
 Execution Time:0.00045394897460938

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='89' and office_id='1' 
 Execution Time:0.00044393539428711

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.00021100044250488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00019097328186035

SELECT *
FROM `examination`
WHERE `examination_id` = 89 
 Execution Time:0.00048589706420898

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00050997734069824

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00046300888061523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00033020973205566

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.000244140625

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=89 
 Execution Time:0.0009911060333252

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=89 
 Execution Time:0.00053906440734863

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=89 
 Execution Time:0.0004420280456543

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=89 
 Execution Time:0.00045394897460938

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='89' and office_id='1' 
 Execution Time:0.00044393539428711

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.00021100044250488

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00019097328186035

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00021696090698242

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00041294097900391

SELECT *
FROM `examination`
WHERE `examination_id` = 89 
 Execution Time:0.00090599060058594

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00023293495178223

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00029492378234863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00020098686218262

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00019097328186035

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=89 
 Execution Time:0.00077486038208008

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=89 
 Execution Time:0.00079607963562012

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=89 
 Execution Time:0.00054311752319336

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=89 
 Execution Time:0.00035190582275391

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='89' and office_id='1' 
 Execution Time:0.00082588195800781

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.00041389465332031

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00041294097900391

SELECT *
FROM `examination`
WHERE `examination_id` = 89 
 Execution Time:0.00090599060058594

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00023293495178223

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00029492378234863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00020098686218262

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00019097328186035

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=89 
 Execution Time:0.00077486038208008

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=89 
 Execution Time:0.00079607963562012

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=89 
 Execution Time:0.00054311752319336

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=89 
 Execution Time:0.00035190582275391

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='89' and office_id='1' 
 Execution Time:0.00082588195800781

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.00041389465332031

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00021505355834961

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00041294097900391

SELECT *
FROM `examination`
WHERE `examination_id` = 89 
 Execution Time:0.00090599060058594

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00023293495178223

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00029492378234863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 184 
 Execution Time:0.00020098686218262

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00019097328186035

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=89 
 Execution Time:0.00077486038208008

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=89 
 Execution Time:0.00079607963562012

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=89 
 Execution Time:0.00054311752319336

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=89 
 Execution Time:0.00035190582275391

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='89' and office_id='1' 
 Execution Time:0.00082588195800781

select * from examination_chargesdetails where  examination_id= '89' 
 Execution Time:0.00041389465332031

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00021505355834961

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0001368522644043

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.001521110534668

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.001521110534668

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0005340576171875

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='45' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0010190010070801

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='45' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0010190010070801

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00052809715270996

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='45' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0010190010070801

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00052809715270996

select user_id,name from  user where user_type=6 
 Execution Time:0.00032496452331543

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='45' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0010190010070801

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00052809715270996

select user_id,name from  user where user_type=6 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035405158996582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035405158996582

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031208992004395

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='45' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0015389919281006

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='45' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0015389919281006

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='45' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0015389919281006

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select user_id,name from  user where user_type=6 
 Execution Time:0.00050210952758789

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='45' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0015389919281006

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select user_id,name from  user where user_type=6 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056886672973633

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056886672973633

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030088424682617

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051188468933105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051188468933105

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003359317779541

select ipdcharge_id , name,amount from  ipdcharge where department_id=9 and office_id=1 
 Execution Time:0.00031089782714844

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00068807601928711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00011682510375977

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00065517425537109

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00065517425537109

select doctors_registration.name as doctorname from doctors_registration where doctors_registration_id=6 
 Execution Time:0.00018906593322754

select doctors_registration.name as doctorname from doctors_registration where doctors_registration_id=8 
 Execution Time:9.7990036010742E-5

select name  from doctors_registration where doctors_registration_id=6 
 Execution Time:0.00010895729064941

select ipdcharge_id , name,amount from  ipdcharge where department_id=9 and ipdcharge_id=5 and office_id=1 
 Execution Time:0.0002138614654541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010590553283691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 346 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 375 
 Execution Time:0.00027585029602051

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 375  and `patient_registration_id` = 346 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010988712310791

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010988712310791

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030684471130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.0038352012634277

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.0038352012634277

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.003931999206543

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.0038352012634277

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.003931999206543

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.0038211345672607

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.0038352012634277

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.003931999206543

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.0038211345672607

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='342' and  office_id= '1' 
 Execution Time:0.0038249492645264

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00047898292541504

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0021789073944092

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00047898292541504

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0021789073944092

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_registration where  patient_registration_id= '342' and  office_id= '1' 
 Execution Time:0.00047898292541504

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=342  
 Execution Time:0.0021789073944092

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=342  
 Execution Time:0.00052499771118164

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='342' and  office_id= '1' 
 Execution Time:0.00016403198242188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 345 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 374 
 Execution Time:0.00023698806762695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 374  and `patient_registration_id` = 345 
 Execution Time:0.00024199485778809

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 345 
 Execution Time:0.00077986717224121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select * from examination where examination_id= '326' and   office_id= '1' 
 Execution Time:0.0012671947479248

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 326 
 Execution Time:0.00056099891662598

select * from examination_chargesdetails where  examination_id= '326' 
 Execution Time:0.00046610832214355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058317184448242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058317184448242

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029587745666504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065398216247559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065398216247559

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='19' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010089874267578

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='66' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00067281723022461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 345 
 Execution Time:0.00037813186645508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 374 
 Execution Time:0.00047397613525391

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 374  and `patient_registration_id` = 345 
 Execution Time:0.00037717819213867

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 345 
 Execution Time:0.0012121200561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select * from examination where examination_id= '326' and   office_id= '1' 
 Execution Time:0.007011890411377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 326 
 Execution Time:0.00068998336791992

select * from examination_chargesdetails where  examination_id= '326' 
 Execution Time:0.00032591819763184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010519027709961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010519027709961

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 345 
 Execution Time:0.00051093101501465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 374 
 Execution Time:0.00053882598876953

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 374  and `patient_registration_id` = 345 
 Execution Time:0.00031900405883789

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 345 
 Execution Time:0.00078320503234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select * from examination where examination_id= '326' and   office_id= '1' 
 Execution Time:0.00075387954711914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072717666625977

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 326 
 Execution Time:0.00038909912109375

select * from examination_chargesdetails where  examination_id= '326' 
 Execution Time:0.00049996376037598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060319900512695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060319900512695

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028181076049805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047087669372559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 345 
 Execution Time:0.00045299530029297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 374 
 Execution Time:0.00071406364440918

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 374  and `patient_registration_id` = 345 
 Execution Time:0.0003819465637207

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 345 
 Execution Time:0.0010750293731689

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052595138549805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052595138549805

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032711029052734

select * from examination where examination_id= '326' and   office_id= '1' 
 Execution Time:0.00071096420288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 326 
 Execution Time:0.0004119873046875

select * from examination_chargesdetails where  examination_id= '326' 
 Execution Time:0.00029206275939941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061488151550293

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00061488151550293

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 346 
 Execution Time:0.000244140625

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 375 
 Execution Time:0.00053310394287109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 375  and `patient_registration_id` = 346 
 Execution Time:0.00042486190795898

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 346 
 Execution Time:0.00061297416687012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00094890594482422

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00094890594482422

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00066900253295898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070285797119141

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070285797119141

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034785270690918

select * from examination where examination_id= '327' and   office_id= '1' 
 Execution Time:0.001025915145874

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 327 
 Execution Time:0.00031614303588867

select * from examination_chargesdetails where  examination_id= '327' 
 Execution Time:0.00026488304138184

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='11' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00098299980163574

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.000823974609375

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0008080005645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 345 
 Execution Time:0.00020813941955566

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 374 
 Execution Time:0.00019407272338867

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 374  and `patient_registration_id` = 345 
 Execution Time:0.00014495849609375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 345 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select * from examination where examination_id= '326' and   office_id= '1' 
 Execution Time:0.0010900497436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 326 
 Execution Time:0.0002591609954834

select * from examination_chargesdetails where  examination_id= '326' 
 Execution Time:0.0003349781036377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006721019744873

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006721019744873

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030517578125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023109912872314

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023109912872314

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023109912872314

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 246 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 368 
 Execution Time:0.00023007392883301

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 368  and `patient_registration_id` = 246 
 Execution Time:0.00037407875061035

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 246 
 Execution Time:0.00087094306945801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select * from examination where examination_id= '321' and   office_id= '1' 
 Execution Time:0.00097894668579102

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 321 
 Execution Time:0.0007941722869873

select * from examination_chargesdetails where  examination_id= '321' 
 Execution Time:0.00037908554077148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003201961517334

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017800331115723

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017800331115723

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010390281677246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 246 
 Execution Time:0.00027585029602051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 368 
 Execution Time:0.00021815299987793

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 368  and `patient_registration_id` = 246 
 Execution Time:0.00047588348388672

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 246 
 Execution Time:0.00097084045410156

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044393539428711

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044393539428711

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058197975158691

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015890598297119

select * from examination where examination_id= '321' and   office_id= '1' 
 Execution Time:0.00067591667175293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 321 
 Execution Time:0.00032305717468262

select * from examination_chargesdetails where  examination_id= '321' 
 Execution Time:0.00031208992004395

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0014021396636963

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011661052703857

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-17' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0018329620361328

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-02-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015749931335449

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-02-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0009911060333252

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-02-17' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010318756103516

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-02-17' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015850067138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069308280944824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069308280944824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='148' and  office_id= '1' 
 Execution Time:0.00037288665771484

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='148' and  office_id= '1' 
 Execution Time:0.00058102607727051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 347 
 Execution Time:0.00040698051452637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 376 
 Execution Time:0.00025606155395508

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 376  and `patient_registration_id` = 347 
 Execution Time:0.00037693977355957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071096420288086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00071096420288086

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023412704467773

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080490112304688

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 347 
 Execution Time:0.00034713745117188

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 376 
 Execution Time:0.00028109550476074

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 376  and `patient_registration_id` = 347 
 Execution Time:0.00058507919311523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010759830474854

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010759830474854

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068116188049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068116188049316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012950897216797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026082992553711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068116188049316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012950897216797

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 348 
 Execution Time:0.00063896179199219

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 377 
 Execution Time:0.0003662109375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 377  and `patient_registration_id` = 348 
 Execution Time:0.00041580200195312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036120414733887

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004119873046875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004119873046875

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027203559875488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090909004211426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select count(*) as cnt from patient_registration where  patient_registration_id= '349' and  office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from patient_registration where  patient_registration_id= '349' and  office_id= '1' 
 Execution Time:0.00044894218444824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=349  
 Execution Time:0.0017910003662109

select count(*) as cnt from patient_registration where  patient_registration_id= '349' and  office_id= '1' 
 Execution Time:0.00044894218444824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=349  
 Execution Time:0.0017910003662109

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=349  
 Execution Time:0.00050783157348633

select count(*) as cnt from patient_registration where  patient_registration_id= '349' and  office_id= '1' 
 Execution Time:0.00044894218444824

select cancel_flag,patient_appointment.description as dess,appointment_type.name appname,print,if(emergency=0,'No','Yes') as emergency,patient_category.name as patient_catename,insurance_company.name as insurance_name,referral_master.name as referralname,occupation,source.name as sourcename,address,city.name as cityname,DATE_FORMAT(dob,'%d/%m/%Y') AS dob,CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,appointment_date,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS adate,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		left join city on patient_registration.city=city.city_id
		left join source on patient_appointment.source=source.source_id
		left join referral_master on referral_master.referral_master_id=patient_registration.referral_masters_id
		left join  patient_category on patient_appointment.patient_category_id=patient_category.patient_category_id
		left join  appointment_type on patient_appointment.apponitment_type_id=appointment_type.appointment_type_id
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=349  
 Execution Time:0.0017910003662109

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=349  
 Execution Time:0.00050783157348633

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='349' and  office_id= '1' 
 Execution Time:0.00014519691467285

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075507164001465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075507164001465

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035190582275391

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016579627990723

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016579627990723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016579627990723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016579627990723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016579627990723

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079917907714844

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030539035797119

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030539035797119

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0030539035797119

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 348 
 Execution Time:0.00049686431884766

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 377 
 Execution Time:0.00031018257141113

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 377  and `patient_registration_id` = 348 
 Execution Time:0.00045204162597656

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 348 
 Execution Time:0.0011539459228516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select * from examination where examination_id= '329' and   office_id= '1' 
 Execution Time:0.00071597099304199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 329 
 Execution Time:0.0005500316619873

select * from examination_chargesdetails where  examination_id= '329' 
 Execution Time:0.00034785270690918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072908401489258

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072908401489258

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014100074768066

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00096297264099121

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00096297264099121

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035715103149414

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015251636505127

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 348 
 Execution Time:0.00043320655822754

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 377 
 Execution Time:0.0003201961517334

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 377  and `patient_registration_id` = 348 
 Execution Time:0.00029301643371582

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 348 
 Execution Time:0.0012040138244629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056910514831543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056910514831543

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040102005004883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038981437683105

select * from examination where examination_id= '329' and   office_id= '1' 
 Execution Time:0.0039689540863037

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 329 
 Execution Time:0.00034594535827637

select * from examination_chargesdetails where  examination_id= '329' 
 Execution Time:0.00025081634521484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 350 
 Execution Time:0.00042819976806641

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 379 
 Execution Time:0.00017213821411133

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 379  and `patient_registration_id` = 350 
 Execution Time:0.00044608116149902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017309188842773

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072717666625977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072717666625977

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043392181396484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 350 
 Execution Time:0.00029802322387695

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 379 
 Execution Time:0.00026082992553711

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 379  and `patient_registration_id` = 350 
 Execution Time:0.0033080577850342

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 350 
 Execution Time:0.0035150051116943

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024020671844482

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044083595275879

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044083595275879

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027108192443848

select * from examination where examination_id= '330' and   office_id= '1' 
 Execution Time:0.0010139942169189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 330 
 Execution Time:0.00032711029052734

select * from examination_chargesdetails where  examination_id= '330' 
 Execution Time:0.00050592422485352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015430450439453

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015430450439453

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057315826416016

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00049614906311035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 347 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 376 
 Execution Time:0.00023698806762695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 376  and `patient_registration_id` = 347 
 Execution Time:0.00036478042602539

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 347 
 Execution Time:0.00088000297546387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020790100097656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035309791564941

select * from examination where examination_id= '328' and   office_id= '1' 
 Execution Time:0.00053501129150391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 328 
 Execution Time:0.00012993812561035

select * from examination_chargesdetails where  examination_id= '328' 
 Execution Time:0.00013208389282227

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00047683715820312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 344 
 Execution Time:0.00026297569274902

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 373 
 Execution Time:0.00018501281738281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 373  and `patient_registration_id` = 344 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058102607727051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058102607727051

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020003318786621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011699199676514

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011699199676514

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011699199676514

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 350 
 Execution Time:0.00036215782165527

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 379 
 Execution Time:0.00030708312988281

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 379  and `patient_registration_id` = 350 
 Execution Time:0.00047397613525391

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 350 
 Execution Time:0.0014111995697021

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017380714416504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010371208190918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010371208190918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010390281677246

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010390281677246

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select * from examination where examination_id= '330' and   office_id= '1' 
 Execution Time:0.001223087310791

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087499618530273

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 330 
 Execution Time:0.00082206726074219

select * from examination_chargesdetails where  examination_id= '330' 
 Execution Time:0.00060486793518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014951229095459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014951229095459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

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
		where billing=0 and appointment_date between  '2022-02-14' and '2022-03-08' and  patient_registration.office_id= 1      
 Execution Time:0.011209011077881

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097894668579102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-01' and  '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1   
 Execution Time:0.00099086761474609

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2022-03-01' and  '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1   
 Execution Time:0.00099086761474609

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
		where billing=0 and appointment_date between  '2022-03-01' and '2022-03-08' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=1 
 Execution Time:0.0036890506744385

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045299530029297

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020503997802734

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1  and billing_detail.particulars_id=1  and billing_detail.charge_id=1  
 Execution Time:0.0013668537139893

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1  and billing_detail.particulars_id=1  and billing_detail.charge_id=1  
 Execution Time:0.0013668537139893

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
		where appointment_date between  '2022-03-01' and '2022-03-08' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=1    and  patient_appointment.appointment_opd_charge_id=1 
 Execution Time:0.0012528896331787

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064206123352051

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026607513427734

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1   and billing_detail.charge_id=5  
 Execution Time:0.0011260509490967

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1   and billing_detail.charge_id=5  
 Execution Time:0.0011260509490967

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00033092498779297

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1   and billing_detail.charge_id=5  
 Execution Time:0.0011260509490967

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00033092498779297

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00021481513977051

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1   and billing_detail.charge_id=5  
 Execution Time:0.0011260509490967

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00033092498779297

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00021481513977051

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00020694732666016

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1   and billing_detail.charge_id=5  
 Execution Time:0.0011260509490967

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00033092498779297

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00021481513977051

select * from investigation where  investigation_id=8  and office_id= 1 and status=1 
 Execution Time:0.00020694732666016

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00018882751464844

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0013198852539062

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0013198852539062

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00031208992004395

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1   and billing_detail.charge_id=3  
 Execution Time:0.0011110305786133

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1   and billing_detail.charge_id=3  
 Execution Time:0.0011110305786133

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.0007929801940918

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1   and billing_detail.charge_id=3  
 Execution Time:0.0011110305786133

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.0007929801940918

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.00030112266540527

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1   and billing_detail.charge_id=3  
 Execution Time:0.0011110305786133

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.0007929801940918

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.00030112266540527

select * from laser where  laser_id=1  and office_id= 1 and status=1 
 Execution Time:0.00022006034851074

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022315979003906

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1  and billing_detail.particulars_id=4  and billing_detail.charge_id=1  
 Execution Time:0.0020508766174316

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,qty,rate,disamt,amount,particulars_id,billing_detail.charge_id,insurance_company.name as insurance from 
			billing_detail
			inner join billing_master on billing_detail.billing_master_id=billing_master.billing_master_id 
			inner join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id 
			inner join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			inner join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			left join insurance_company on billing_master.insurance_company_id=insurance_company.insurance_company_id
			where billing_date between  '2022-03-01' and '2022-03-08' and  billing_master.office_id= 1      and billing_master.doctor_id=1  and billing_detail.particulars_id=4  and billing_detail.charge_id=1  
 Execution Time:0.0020508766174316

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
		where appointment_date between  '2022-03-01' and '2022-03-08' and  patient_registration.office_id= 1      and patient_appointment.doctor_id=1    and  patient_appointment.appointment_opd_charge_id=4 
 Execution Time:0.0022449493408203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011558532714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011558532714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

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
		where billing=0 and appointment_date between  '2022-03-08' and '2022-03-08' and  patient_registration.office_id= 1      
 Execution Time:0.0022940635681152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041580200195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041580200195312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013089179992676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001218318939209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041580200195312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00068521499633789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027039051055908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027039051055908

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027039051055908

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027039051055908

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027039051055908

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027039051055908

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027039051055908

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027039051055908

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053811073303223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012919902801514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027039051055908

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022196769714355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053811073303223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012919902801514

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055623054504395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055623054504395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021910667419434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055623054504395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001582145690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012080669403076

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001582145690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012080669403076

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012919902801514

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001582145690918

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012080669403076

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012919902801514

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 349 
 Execution Time:0.00041317939758301

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 378 
 Execution Time:0.00049209594726562

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 378  and `patient_registration_id` = 349 
 Execution Time:0.001086950302124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012872219085693

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012872219085693

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036716461181641

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0012269020080566

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0012269020080566

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041069984436035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041069984436035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.025314092636108

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.025314092636108

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.019721984863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.025314092636108

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.019721984863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010637998580933

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.025314092636108

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.019721984863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010637998580933

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.025314092636108

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.019721984863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010637998580933

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040709972381592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.025314092636108

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.019721984863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010637998580933

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040709972381592

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015659332275391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.025314092636108

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.019721984863281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010637998580933

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040709972381592

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 344 
 Execution Time:0.011966943740845

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 373 
 Execution Time:0.001270055770874

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 373  and `patient_registration_id` = 344 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065803527832031

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065803527832031

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029706954956055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 351 
 Execution Time:0.00043106079101562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 380 
 Execution Time:0.00047397613525391

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 380  and `patient_registration_id` = 351 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060296058654785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060296058654785

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022387504577637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.005141019821167

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075984001159668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.005141019821167

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 351 
 Execution Time:0.00085091590881348

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 380 
 Execution Time:0.00078201293945312

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 380  and `patient_registration_id` = 351 
 Execution Time:0.00049400329589844

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 351 
 Execution Time:0.0012779235839844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015308856964111

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015308856964111

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042200088500977

select * from examination where examination_id= '333' and   office_id= '1' 
 Execution Time:0.00098896026611328

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 333 
 Execution Time:0.001270055770874

select * from examination_chargesdetails where  examination_id= '333' 
 Execution Time:0.0013091564178467

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045919418334961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045919418334961

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002748966217041

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='33' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0024411678314209

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005650520324707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 320 
 Execution Time:0.00026679039001465

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 346 
 Execution Time:0.00023388862609863

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 346  and `patient_registration_id` = 320 
 Execution Time:0.00032997131347656

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 320 
 Execution Time:0.00062799453735352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select * from examination where examination_id= '299' and   office_id= '1' 
 Execution Time:0.00096702575683594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 299 
 Execution Time:0.0021989345550537

select * from examination_chargesdetails where  examination_id= '299' 
 Execution Time:0.00060510635375977

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063395500183105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063395500183105

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048685073852539

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064802169799805

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001101016998291

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001101016998291

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009300708770752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009300708770752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021188259124756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021188259124756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021188259124756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021188259124756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022809505462646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021188259124756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022809505462646

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010159015655518

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021188259124756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022809505462646

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00097393989562988

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001849889755249

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001849889755249

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001849889755249

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 352 
 Execution Time:0.00040888786315918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 381 
 Execution Time:0.00038695335388184

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 381  and `patient_registration_id` = 352 
 Execution Time:0.00043916702270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 352 
 Execution Time:0.00062894821166992

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 381 
 Execution Time:0.00045204162597656

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 381  and `patient_registration_id` = 352 
 Execution Time:0.00034689903259277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073790550231934

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073790550231934

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068092346191406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054383277893066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068092346191406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065112113952637

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065112113952637

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041604042053223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064706802368164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064706802368164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0024788379669189

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0029349327087402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0042839050292969

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0042839050292969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0042839050292969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010960102081299

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0042839050292969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0030660629272461

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00085711479187012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043058395385742

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043058395385742

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043058395385742

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 344 
 Execution Time:0.0041458606719971

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 373 
 Execution Time:0.0038461685180664

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 373  and `patient_registration_id` = 344 
 Execution Time:0.0037941932678223

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 344 
 Execution Time:0.003931999206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003939151763916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 344 
 Execution Time:0.00038409233093262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 373 
 Execution Time:0.00050783157348633

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 373  and `patient_registration_id` = 344 
 Execution Time:0.0010571479797363

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 344 
 Execution Time:0.00098013877868652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010030269622803

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010030269622803

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037598609924316

select * from examination where examination_id= '332' and   office_id= '1' 
 Execution Time:0.00084304809570312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 332 
 Execution Time:0.0015730857849121

select * from examination_chargesdetails where  examination_id= '332' 
 Execution Time:0.0069830417633057

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016329288482666

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016329288482666

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037908554077148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 349 
 Execution Time:0.00020599365234375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 378 
 Execution Time:0.0001521110534668

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 378  and `patient_registration_id` = 349 
 Execution Time:0.00027203559875488

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 349 
 Execution Time:0.00060796737670898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012898445129395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 349 
 Execution Time:0.00023508071899414

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 378 
 Execution Time:0.00018405914306641

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 378  and `patient_registration_id` = 349 
 Execution Time:0.0001368522644043

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 349 
 Execution Time:0.0006558895111084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select * from examination where examination_id= '331' and   office_id= '1' 
 Execution Time:0.0007319450378418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 331 
 Execution Time:0.0002129077911377

select * from examination_chargesdetails where  examination_id= '331' 
 Execution Time:0.00032997131347656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048589706420898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048589706420898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026416778564453

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00069499015808105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012238025665283

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012238025665283

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012238025665283

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012238025665283

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012238025665283

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012149810791016

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-03-08' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.00088596343994141

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010559558868408

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00088810920715332

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010039806365967

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010659694671631

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.001323938369751

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011301040649414

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011301040649414

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.002316951751709

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011301040649414

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.002316951751709

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.0001828670501709

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011301040649414

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.002316951751709

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.0001828670501709

select * from laser where  laser_id=2  and office_id= 1 and status=1 
 Execution Time:0.00011801719665527

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-07' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010600090026855

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-07' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010600090026855

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-07' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010600090026855

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-07' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010600090026855

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019598007202148

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0001981258392334

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 352 
 Execution Time:0.00023293495178223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 381 
 Execution Time:0.00027108192443848

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 381  and `patient_registration_id` = 352 
 Execution Time:0.00047802925109863

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 352 
 Execution Time:0.00083684921264648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00025200843811035

select * from examination where examination_id= '334' and   office_id= '1' 
 Execution Time:0.00081515312194824

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 334 
 Execution Time:0.00056314468383789

select * from examination_chargesdetails where  examination_id= '334' 
 Execution Time:0.00028300285339355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064396858215332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064396858215332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003349781036377

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014359951019287

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 344 
 Execution Time:0.00036406517028809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 373 
 Execution Time:0.00031685829162598

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 373  and `patient_registration_id` = 344 
 Execution Time:0.0003211498260498

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 344 
 Execution Time:0.0010080337524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 344 
 Execution Time:0.00022792816162109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 373 
 Execution Time:0.00032401084899902

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 373  and `patient_registration_id` = 344 
 Execution Time:0.00014710426330566

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 344 
 Execution Time:0.00066304206848145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012803077697754

select * from examination where examination_id= '332' and   office_id= '1' 
 Execution Time:0.00068902969360352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 332 
 Execution Time:0.00042009353637695

select * from examination_chargesdetails where  examination_id= '332' 
 Execution Time:0.00020909309387207

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060510635375977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060510635375977

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003809928894043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00080299377441406

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00071310997009277

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 1 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0006859302520752

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.00091195106506348

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-03-08' and chargetype_id = '3' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0010538101196289

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 353 
 Execution Time:0.0002131462097168

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 382 
 Execution Time:0.00016593933105469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 382  and `patient_registration_id` = 353 
 Execution Time:0.00012803077697754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034999847412109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034999847412109

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00021696090698242

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00066304206848145

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00066304206848145

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00020408630371094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046920776367188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046920776367188

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013184547424316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073599815368652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 353 
 Execution Time:0.0004889965057373

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 382 
 Execution Time:0.00045609474182129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 382  and `patient_registration_id` = 353 
 Execution Time:0.00034093856811523

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 353 
 Execution Time:0.0010640621185303

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010800361633301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010800361633301

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039482116699219

select * from examination where examination_id= '335' and   office_id= '1' 
 Execution Time:0.00052618980407715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 335 
 Execution Time:0.00041007995605469

select * from examination_chargesdetails where  examination_id= '335' 
 Execution Time:0.00049519538879395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047087669372559

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047087669372559

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022006034851074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 354 
 Execution Time:0.00026583671569824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 383 
 Execution Time:0.00034999847412109

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 383  and `patient_registration_id` = 354 
 Execution Time:0.00049805641174316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012218952178955

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 354 
 Execution Time:0.00026512145996094

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 383 
 Execution Time:0.0001990795135498

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 383  and `patient_registration_id` = 354 
 Execution Time:0.0001530647277832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00086116790771484

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00086116790771484

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013132095336914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013132095336914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013132095336914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010218620300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013132095336914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010218620300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066995620727539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013132095336914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010218620300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066995620727539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013132095336914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010218620300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066995620727539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013132095336914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010218620300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066995620727539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012850761413574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013132095336914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010218620300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066995620727539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012850761413574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013132095336914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010218620300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066995620727539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012850761413574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010530948638916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013039112091064

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013039112091064

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013039112091064

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 353 
 Execution Time:0.00063014030456543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 382 
 Execution Time:0.00023603439331055

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 382  and `patient_registration_id` = 353 
 Execution Time:0.001068115234375

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 353 
 Execution Time:0.00078487396240234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014877319335938

select * from examination where examination_id= '335' and   office_id= '1' 
 Execution Time:0.00086498260498047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 335 
 Execution Time:0.0012328624725342

select * from examination_chargesdetails where  examination_id= '335' 
 Execution Time:0.00087618827819824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013508796691895

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013508796691895

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00024795532226562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012919902801514

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012919902801514

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020813941955566

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0018870830535889

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='47' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056004524230957

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0028579235076904

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 353 
 Execution Time:0.0005488395690918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 382 
 Execution Time:0.00063586235046387

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 382  and `patient_registration_id` = 353 
 Execution Time:0.00031805038452148

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 353 
 Execution Time:0.001086950302124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select * from examination where examination_id= '335' and   office_id= '1' 
 Execution Time:0.00081610679626465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 335 
 Execution Time:0.00020480155944824

select * from examination_chargesdetails where  examination_id= '335' 
 Execution Time:0.00030803680419922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047397613525391

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00018000602722168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00023484230041504

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00034785270690918

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select * from medicine_instruction where medicine_instruction_id='13' and office_id= '1' 
 Execution Time:0.00050902366638184

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select count(*) as cnt from medicine_templates where  name = 'asdsa' and office_id= '1' 
 Execution Time:0.00047111511230469

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select * from medicine_instruction where medicine_instruction_id='15' and office_id= '1' 
 Execution Time:0.0010590553283691

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0044968128204346

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0005638599395752

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018501281738281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0018501281738281

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.001823902130127

select count(*) as cnt from medicine_instruction where  name = 'werew' and office_id= '1' 
 Execution Time:0.00063109397888184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select * from medicine_instruction where medicine_instruction_id='16' and office_id= '1' 
 Execution Time:0.00046396255493164

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select * from medicine_instruction where medicine_instruction_id='16' and office_id= '1' 
 Execution Time:0.00046396255493164

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00014805793762207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select * from medicine_instruction where medicine_instruction_id='16' and office_id= '1' 
 Execution Time:0.00053620338439941

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select * from medicine_instruction where medicine_instruction_id='16' and office_id= '1' 
 Execution Time:0.00053620338439941

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select * from medicine_instruction where medicine_instruction_id='15' and office_id= '1' 
 Execution Time:0.00054001808166504

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select * from medicine_instruction where medicine_instruction_id='15' and office_id= '1' 
 Execution Time:0.00054001808166504

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select * from medicine_instruction where medicine_instruction_id='15' and office_id= '1' 
 Execution Time:0.00050806999206543

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select * from medicine_instruction where medicine_instruction_id='15' and office_id= '1' 
 Execution Time:0.00050806999206543

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select * from medicine_instruction where medicine_instruction_id='12' and office_id= '1' 
 Execution Time:0.00040602684020996

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select * from medicine_instruction where medicine_instruction_id='12' and office_id= '1' 
 Execution Time:0.00040602684020996

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select * from medicine_instruction where medicine_instruction_id='15' and office_id= '1' 
 Execution Time:0.00037503242492676

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select * from medicine_instruction where medicine_instruction_id='15' and office_id= '1' 
 Execution Time:0.00037503242492676

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 353 
 Execution Time:0.00030016899108887

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 382 
 Execution Time:0.00023198127746582

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 382  and `patient_registration_id` = 353 
 Execution Time:0.00031900405883789

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 353 
 Execution Time:0.00076818466186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014281272888184

select * from examination where examination_id= '335' and   office_id= '1' 
 Execution Time:0.00065398216247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 335 
 Execution Time:0.00013208389282227

select * from examination_chargesdetails where  examination_id= '335' 
 Execution Time:0.00013303756713867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020503997802734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042414665222168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042414665222168

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00023698806762695

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00063300132751465

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00058794021606445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 353 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 382 
 Execution Time:0.00027203559875488

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 382  and `patient_registration_id` = 353 
 Execution Time:0.00018405914306641

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 353 
 Execution Time:0.00083804130554199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014710426330566

select * from examination where examination_id= '335' and   office_id= '1' 
 Execution Time:0.00058388710021973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 335 
 Execution Time:0.00061511993408203

select * from examination_chargesdetails where  examination_id= '335' 
 Execution Time:0.00025391578674316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033712387084961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033712387084961

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00022101402282715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043606758117676

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043606758117676

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0001678466796875

SELECT *
FROM `examination`
WHERE `examination_id` = 335 
 Execution Time:0.00056600570678711

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 2 
 Execution Time:0.00020694732666016

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00047111511230469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 353 
 Execution Time:0.00018811225891113

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00019502639770508

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=335 
 Execution Time:0.00061702728271484

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=335 
 Execution Time:0.00029587745666504

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=335 
 Execution Time:0.00021886825561523

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=335 
 Execution Time:0.00021910667419434

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='335' and office_id='1' 
 Execution Time:0.00051999092102051

select * from examination_chargesdetails where  examination_id= '335' 
 Execution Time:0.00018501281738281

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00043201446533203

select count(*) as cnt from medicine_templates where  name = 'test' and office_id= '1' 
 Execution Time:0.00038814544677734

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select * from medicine_instruction where medicine_instruction_id='13' and office_id= '1' 
 Execution Time:0.00028085708618164

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select * from medicine_instruction where medicine_instruction_id='13' and office_id= '1' 
 Execution Time:0.00028085708618164

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select medicine_instruction_id,name,days from  medicine_instruction where category_id='3' and  office_id= '1' and status=1 
 Execution Time:0.00028300285339355


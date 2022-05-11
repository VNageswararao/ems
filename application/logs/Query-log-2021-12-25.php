select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023910999298096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023910999298096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023910999298096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025420188903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023910999298096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025420188903809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031280517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023910999298096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025420188903809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031280517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023910999298096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025420188903809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031280517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026018619537354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029749870300293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023910999298096

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031750202178955

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025420188903809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031280517578125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026018619537354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00055885314941406

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00078296661376953

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00078296661376953

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015769004821777

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00078296661376953

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015769004821777

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00056886672973633

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00056886672973633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00023579597473145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0064599514007568

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0064599514007568

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024678707122803

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0064599514007568

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024678707122803

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0007469654083252

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 107 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 107 
 Execution Time:0.00039815902709961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00038409233093262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 107 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0003969669342041

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 107 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072598457336426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00045394897460938

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 107 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 107 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select * from examination where examination_id= '43' and   office_id= '1' 
 Execution Time:0.00089812278747559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023019313812256

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 43 
 Execution Time:0.00041794776916504

select * from examination_chargesdetails where  examination_id= '43' 
 Execution Time:0.00047516822814941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075006484985352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075006484985352

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036001205444336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0004279613494873

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 107 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036287307739258

select * from examination where examination_id= '43' and   office_id= '1' 
 Execution Time:0.00084996223449707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 43 
 Execution Time:0.00036787986755371

select * from examination_chargesdetails where  examination_id= '43' 
 Execution Time:0.00028395652770996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00055384635925293

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 107 
 Execution Time:0.00060200691223145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049710273742676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049710273742676

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040721893310547

select * from examination where examination_id= '43' and   office_id= '1' 
 Execution Time:0.001230001449585

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 43 
 Execution Time:0.00045084953308105

select * from examination_chargesdetails where  examination_id= '43' 
 Execution Time:0.00032401084899902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038468837738037

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038468837738037

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0052659511566162

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038468837738037

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0026669502258301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0052659511566162

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0032789707183838

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 107 
 Execution Time:0.0043411254882812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015339851379395

select * from examination where examination_id= '43' and   office_id= '1' 
 Execution Time:0.00068187713623047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 43 
 Execution Time:0.00028395652770996

select * from examination_chargesdetails where  examination_id= '43' 
 Execution Time:0.00024890899658203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00022506713867188

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00086402893066406

SELECT *
FROM `examination`
WHERE `examination_id` = 26 
 Execution Time:0.00045990943908691

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00021886825561523

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00066280364990234

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00024986267089844

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00053501129150391

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=26 
 Execution Time:0.00075006484985352

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=26 
 Execution Time:0.0004429817199707

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=26 
 Execution Time:0.00063109397888184

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=26 
 Execution Time:0.00030899047851562

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='26' and office_id='1' 
 Execution Time:0.00049591064453125

select * from examination_chargesdetails where  examination_id= '26' 
 Execution Time:0.00013589859008789

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00051403045654297

SELECT *
FROM `examination`
WHERE `examination_id` = 35 
 Execution Time:0.00041294097900391

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00015377998352051

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00045490264892578

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0002288818359375

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00020694732666016

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=35 
 Execution Time:0.00037813186645508

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=35 
 Execution Time:0.00035500526428223

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=35 
 Execution Time:0.00028896331787109

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=35 
 Execution Time:0.0005650520324707

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='35' and office_id='1' 
 Execution Time:0.00028800964355469

select * from examination_chargesdetails where  examination_id= '35' 
 Execution Time:0.0001981258392334

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00034403800964355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 107 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select * from examination where examination_id= '43' and   office_id= '1' 
 Execution Time:0.00065398216247559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 43 
 Execution Time:0.00030303001403809

select * from examination_chargesdetails where  examination_id= '43' 
 Execution Time:0.00037002563476562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006859302520752

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006859302520752

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032806396484375

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00061893463134766

SELECT *
FROM `examination`
WHERE `examination_id` = 43 
 Execution Time:0.00081205368041992

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00025200843811035

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00049805641174316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00040006637573242

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00056600570678711

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=43 
 Execution Time:0.00055789947509766

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=43 
 Execution Time:0.00040912628173828

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=43 
 Execution Time:0.00035309791564941

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=43 
 Execution Time:0.0003659725189209

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='43' and office_id='1' 
 Execution Time:0.0003509521484375

select * from examination_chargesdetails where  examination_id= '43' 
 Execution Time:0.00024199485778809

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00053501129150391

SELECT *
FROM `examination`
WHERE `examination_id` = 43 
 Execution Time:0.00050115585327148

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00019693374633789

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00067305564880371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00018811225891113

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0002291202545166

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=43 
 Execution Time:0.00042200088500977

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=43 
 Execution Time:0.00039887428283691

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=43 
 Execution Time:0.00036787986755371

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=43 
 Execution Time:0.00063514709472656

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='43' and office_id='1' 
 Execution Time:0.00075006484985352

select * from examination_chargesdetails where  examination_id= '43' 
 Execution Time:0.00070595741271973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023629665374756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023629665374756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023629665374756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0083198547363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023629665374756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0083198547363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021469593048096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023629665374756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0083198547363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021469593048096

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020768642425537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023629665374756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0083198547363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021469593048096

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020768642425537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023629665374756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0083198547363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021469593048096

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020768642425537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030040740966797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023629665374756

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022590160369873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0083198547363281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021469593048096

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020768642425537

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030040740966797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058379173278809

select * from office where  office_id= '1' 
 Execution Time:0.00058484077453613

select * from office where  office_id= '1' 
 Execution Time:0.00085020065307617

select * from office where  office_id= '1' 
 Execution Time:0.001140832901001

select * from office where  office_id= '1' 
 Execution Time:0.0006859302520752

select * from office where  office_id= '1' 
 Execution Time:0.00050187110900879

select * from office where  office_id= '1' 
 Execution Time:0.00041007995605469

select * from office where  office_id= '1' 
 Execution Time:0.00075292587280273

select * from office where  office_id= '1' 
 Execution Time:0.0010299682617188

select * from office where  office_id= '1' 
 Execution Time:0.00064396858215332

select * from office where  office_id= '1' 
 Execution Time:0.00060701370239258

select * from office where  office_id= '1' 
 Execution Time:0.00077199935913086

select * from office where  office_id= '1' 
 Execution Time:0.00064516067504883

select * from office where  office_id= '1' 
 Execution Time:0.00048398971557617

select * from office where  office_id= '1' 
 Execution Time:0.00046992301940918

select * from office where  office_id= '1' 
 Execution Time:0.00054717063903809

select * from office where  office_id= '1' 
 Execution Time:0.00069117546081543

select * from office where  office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00047397613525391

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `mrd_code_no` = 'ABY', `youtube` = '12', `website` = '121', `facebook` = '121', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `nabh_logo` = NULL, `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00062894821166992

select * from office where  office_id= '1' 
 Execution Time:0.00078582763671875

select * from office where  office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00063395500183105

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `mrd_code_no` = 'ABY', `youtube` = '12', `website` = '121', `facebook` = '121', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `nabh_logo` = NULL, `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00049185752868652

select * from office where  office_id= '1' 
 Execution Time:0.00076985359191895

select * from office where  office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0016539096832275

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.0016539096832275

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `mrd_code_no` = 'ABY', `youtube` = '12', `website` = '121', `facebook` = '121', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `nabh_logo` = NULL, `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00045990943908691

select * from office where  office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00050187110900879

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00050187110900879

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `mrd_code_no` = 'ABY', `youtube` = '12', `website` = '121', `facebook` = '121', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `nabh_logo` = NULL, `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00069308280944824

select * from office where  office_id= '1' 
 Execution Time:0.00078105926513672

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00037503242492676

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `mrd_code_no` = 'ABY', `youtube` = '12', `website` = '121', `facebook` = '121', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `nabh_logo` = 'nabhlogo2.jpg', `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00067710876464844

select * from office where  office_id= '1' 
 Execution Time:0.00034093856811523

select * from office where  office_id= '1' 
 Execution Time:0.00036120414733887

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00047492980957031

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '23DR567HYUHHS34', `mrd_code_no` = 'ABY', `youtube` = '12', `website` = '121', `facebook` = '121', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `nabh_logo` = 'nabhlogo.png', `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00074005126953125

select * from office where  office_id= '1' 
 Execution Time:0.00087809562683105

select * from office where  office_id= '1' 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010778903961182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010778903961182

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010778903961182

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010778903961182

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012869834899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014579296112061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013389587402344

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010778903961182

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012319087982178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012869834899902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select * from office where  office_id= '1' 
 Execution Time:0.00061583518981934

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00032997131347656

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '', `mrd_code_no` = 'ABY', `youtube` = '12', `website` = '121', `facebook` = '121', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `nabh_logo` = 'nabhlogo.png', `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00056695938110352

select * from office where  office_id= '1' 
 Execution Time:0.00057387351989746

select * from office where  office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00071096420288086

select count(*) as cnt from office where  office_id= '1' 
 Execution Time:0.00071096420288086

UPDATE `office` SET `company_name` = 'Kanhangad Eye foundation &amp; Research centre', `license_no` = '', `company_mobile` = '7026345102', `company_phone` = '1234567891', `email_id` = 'kanhangadeyefoundation@gmail.com', `address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `printable_company_name` = 'Kanhangad Eye foundation &amp; Research centre', `printable_company_phone` = '1234567898', `printable_company_mobile` = '1234567898', `printable_emailid` = 'kanhangadeyefoundation@gmail.com', `declaration` = 'Declarations', `gstin_no` = '', `mrd_code_no` = 'ABY', `youtube` = '12', `website` = '121dxfdsf', `facebook` = '121', `printable_company_address` = 'Printable ComSabaka Centre, Kanhangad, Kasaragod - 671315, Near New LIC Office', `nabh_logo` = 'nabhlogo.png', `logo` = 'optical5.jpg', `login_id` = '1'
WHERE `office_id` = '1' 
 Execution Time:0.00077509880065918

select * from office where  office_id= '1' 
 Execution Time:0.0005030632019043


select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045919418334961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050849914550781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050849914550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050849914550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050849914550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022149085998535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050849914550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022149085998535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050849914550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022149085998535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024080276489258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050849914550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022149085998535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024080276489258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029640197753906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050849914550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022149085998535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024080276489258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029640197753906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045919418334961

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050849914550781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022149085998535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024080276489258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029640197753906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024950504302979

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.004335880279541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0053040981292725

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.004335880279541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0053040981292725

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0069038867950439

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.004335880279541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0053040981292725

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0069038867950439

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00040793418884277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 229 
 Execution Time:0.0011749267578125

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 2 
 Execution Time:0.00065493583679199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select * from examination where examination_id= '84' and   office_id= '1' 
 Execution Time:0.0022327899932861

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020568370819092

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 84 
 Execution Time:0.0035548210144043

select * from examination_chargesdetails where  examination_id= '84' 
 Execution Time:0.0029661655426025

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0040299892425537

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0040299892425537

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024721622467041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0043540000915527

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0043540000915527

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022470951080322

SELECT *
FROM `examination`
WHERE `examination_id` = 26 
 Execution Time:0.00087308883666992

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00033998489379883

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0004270076751709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00032401084899902

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0023930072784424

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=26 
 Execution Time:0.0017759799957275

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=26 
 Execution Time:0.00078988075256348

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=26 
 Execution Time:0.00074005126953125

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=26 
 Execution Time:0.00051498413085938

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='26' and office_id='1' 
 Execution Time:0.00078392028808594

select * from examination_chargesdetails where  examination_id= '26' 
 Execution Time:0.00029993057250977

SELECT *
FROM `examination`
WHERE `examination_id` = 47 
 Execution Time:0.00082087516784668

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00063896179199219

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00057888031005859

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00041294097900391

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00029587745666504

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=47 
 Execution Time:0.00057697296142578

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=47 
 Execution Time:0.00055909156799316

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=47 
 Execution Time:0.00042104721069336

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=47 
 Execution Time:0.00067400932312012

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='47' and office_id='1' 
 Execution Time:0.0004730224609375

select * from examination_chargesdetails where  examination_id= '47' 
 Execution Time:0.00027894973754883

SELECT *
FROM `examination`
WHERE `examination_id` = 68 
 Execution Time:0.0012969970703125

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 6 
 Execution Time:0.00039196014404297

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00029110908508301

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00032591819763184

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00027203559875488

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=68 
 Execution Time:0.00078988075256348

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=68 
 Execution Time:0.00069904327392578

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=68 
 Execution Time:0.00061798095703125

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=68 
 Execution Time:0.00042605400085449

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='68' and office_id='1' 
 Execution Time:0.0005648136138916

select * from examination_chargesdetails where  examination_id= '68' 
 Execution Time:0.00024700164794922

SELECT *
FROM `examination`
WHERE `examination_id` = 75 
 Execution Time:0.0011680126190186

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 7 
 Execution Time:0.00065994262695312

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00040006637573242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00069212913513184

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00068092346191406

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=75 
 Execution Time:0.0019559860229492

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=75 
 Execution Time:0.0011839866638184

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=75 
 Execution Time:0.0011951923370361

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=75 
 Execution Time:0.00084590911865234

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='75' and office_id='1' 
 Execution Time:0.0022890567779541

select * from examination_chargesdetails where  examination_id= '75' 
 Execution Time:0.0020370483398438

SELECT *
FROM `examination`
WHERE `examination_id` = 84 
 Execution Time:0.0019221305847168

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00051498413085938

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00036883354187012

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00028395652770996

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=84 
 Execution Time:0.0010538101196289

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=84 
 Execution Time:0.00061178207397461

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=84 
 Execution Time:0.00068998336791992

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=84 
 Execution Time:0.00050497055053711

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='84' and office_id='1' 
 Execution Time:0.00053095817565918

select * from examination_chargesdetails where  examination_id= '84' 
 Execution Time:0.00023818016052246

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043940544128418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043940544128418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010251998901367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0043940544128418

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00098490715026855

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010251998901367

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0030319690704346

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 229 
 Execution Time:0.0011999607086182

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 2 
 Execution Time:0.0099008083343506

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select * from examination where examination_id= '84' and   office_id= '1' 
 Execution Time:0.0006871223449707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0020849704742432

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 84 
 Execution Time:0.0012900829315186

select * from examination_chargesdetails where  examination_id= '84' 
 Execution Time:0.00062108039855957

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009000301361084

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0009000301361084

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003349781036377

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083279609680176

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083279609680176

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081086158752441

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.023892879486084

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011429786682129

SELECT *
FROM `examination`
WHERE `examination_id` = 84 
 Execution Time:0.003352165222168

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00069785118103027

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.0033199787139893

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.0045669078826904

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.0018310546875

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=84 
 Execution Time:0.0026450157165527

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=84 
 Execution Time:0.0102858543396

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=84 
 Execution Time:0.0021140575408936

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=84 
 Execution Time:0.01198410987854

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='84' and office_id='1' 
 Execution Time:0.0017280578613281

select * from examination_chargesdetails where  examination_id= '84' 
 Execution Time:0.00071001052856445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034401416778564

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034401416778564

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0034401416778564

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00054693222045898

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 229 
 Execution Time:0.0045900344848633

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 2 
 Execution Time:0.00092601776123047

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017280578613281

select * from examination where examination_id= '84' and   office_id= '1' 
 Execution Time:0.0020020008087158

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017762184143066

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 84 
 Execution Time:0.00071310997009277

select * from examination_chargesdetails where  examination_id= '84' 
 Execution Time:0.0032899379730225

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075602531433105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075602531433105

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049805641174316

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063085556030273

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063085556030273

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050997734069824

SELECT *
FROM `examination`
WHERE `examination_id` = 84 
 Execution Time:0.00081110000610352

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00042295455932617

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00058913230895996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00035810470581055

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00033998489379883

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=84 
 Execution Time:0.0010209083557129

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=84 
 Execution Time:0.0008540153503418

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=84 
 Execution Time:0.0008540153503418

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=84 
 Execution Time:0.00070595741271973

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='84' and office_id='1' 
 Execution Time:0.00066184997558594

select * from examination_chargesdetails where  examination_id= '84' 
 Execution Time:0.00037789344787598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013651847839355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001378059387207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013651847839355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001378059387207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020170211791992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0013651847839355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001378059387207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020170211791992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00023198127746582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 229 
 Execution Time:0.00045490264892578

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 2 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select * from examination where examination_id= '84' and   office_id= '1' 
 Execution Time:0.00075697898864746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 84 
 Execution Time:0.00034904479980469

select * from examination_chargesdetails where  examination_id= '84' 
 Execution Time:0.00023102760314941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011470317840576

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011470317840576

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053095817565918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088191032409668

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00088191032409668

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046610832214355

SELECT *
FROM `examination`
WHERE `examination_id` = 84 
 Execution Time:0.00085711479187012

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.0003972053527832

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00074410438537598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00051784515380859

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=84 
 Execution Time:0.00071310997009277

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=84 
 Execution Time:0.00066781044006348

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=84 
 Execution Time:0.00059318542480469

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=84 
 Execution Time:0.00083303451538086

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='84' and office_id='1' 
 Execution Time:0.00048708915710449

select * from examination_chargesdetails where  examination_id= '84' 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026819705963135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026819705963135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026819705963135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018610954284668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026819705963135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018610954284668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026819705963135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018610954284668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026819705963135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018610954284668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002065896987915

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026819705963135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018610954284668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002065896987915

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023980140686035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026819705963135

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018610954284668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020740032196045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002065896987915

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016880035400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011801719665527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011801719665527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010671615600586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011801719665527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010671615600586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011801719665527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010671615600586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011801719665527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010671615600586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024349689483643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011801719665527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010671615600586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024349689483643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018908977508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011801719665527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010671615600586

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024349689483643

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014309883117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064277648925781

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002392053604126

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020720958709717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020720958709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020720958709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020720958709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001521110534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020720958709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020689964294434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020720958709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020689964294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020720958709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020689964294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020720958709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020689964294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019268989562988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020720958709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020689964294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019268989562988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020720958709717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0016570091247559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001521110534668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020689964294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019268989562988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015230178833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089478492736816

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089478492736816

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006110668182373

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00027680397033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089478492736816

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020208358764648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020208358764648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021920204162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020208358764648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021920204162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020208358764648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021920204162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020208358764648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021920204162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.016277074813843

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020208358764648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021920204162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.016277074813843

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011420965194702

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020208358764648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021920204162598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025379657745361

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.016277074813843

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011420965194702

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025410652160645

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.0006411075592041

select count(*) as cnt from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.0006411075592041

select gender from patient_title where  patient_title_id = '22' and office_id= '1' 
 Execution Time:0.00019288063049316

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00070905685424805

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00070905685424805

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00034785270690918

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00080490112304688

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00080490112304688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043988227844238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017881393432617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043988227844238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037028789520264

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0035989284515381

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037028789520264

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0035989284515381

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0021979808807373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037028789520264

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0035989284515381

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0021979808807373

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.00061202049255371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 230 
 Execution Time:0.00024890899658203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028049945831299

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028049945831299

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089502334594727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089502334594727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089502334594727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089502334594727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021209716796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089502334594727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021209716796875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011260509490967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012569427490234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093603134155273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089502334594727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00087690353393555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021209716796875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012800693511963

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089192390441895

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00046896934509277

SELECT *
FROM `examination`
WHERE `examination_id` = 85 
 Execution Time:0.00070810317993164

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00019001960754395

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.0001680850982666

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.00015687942504883

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00015807151794434

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=85 
 Execution Time:0.0006558895111084

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=85 
 Execution Time:0.0005190372467041

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=85 
 Execution Time:0.00052690505981445

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=85 
 Execution Time:0.0022549629211426

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='85' and office_id='1' 
 Execution Time:0.0006859302520752

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.0021560192108154

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055217742919922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 230 
 Execution Time:0.00030303001403809

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 180 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select * from examination where examination_id= '85' and   office_id= '1' 
 Execution Time:0.00064182281494141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 85 
 Execution Time:0.00044894218444824

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.00024199485778809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002687931060791

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002687931060791

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042319297790527

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052404403686523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00052404403686523

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033807754516602

SELECT *
FROM `examination`
WHERE `examination_id` = 85 
 Execution Time:0.00069594383239746

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00051188468933105

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00030088424682617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.00020503997802734

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00024294853210449

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=85 
 Execution Time:0.00054407119750977

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=85 
 Execution Time:0.00047707557678223

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=85 
 Execution Time:0.00045108795166016

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=85 
 Execution Time:0.00039219856262207

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='85' and office_id='1' 
 Execution Time:0.00046610832214355

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.00025010108947754

SELECT *
FROM `examination`
WHERE `examination_id` = 85 
 Execution Time:0.0007178783416748

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00040292739868164

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00035405158996582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.00024890899658203

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00020980834960938

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=85 
 Execution Time:0.00056910514831543

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=85 
 Execution Time:0.0005488395690918

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=85 
 Execution Time:0.00069904327392578

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=85 
 Execution Time:0.00038290023803711

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='85' and office_id='1' 
 Execution Time:0.00041913986206055

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.00019192695617676

SELECT *
FROM `examination`
WHERE `examination_id` = 85 
 Execution Time:0.00066208839416504

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00039005279541016

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00025081634521484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.00022697448730469

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00021100044250488

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=85 
 Execution Time:0.00064301490783691

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=85 
 Execution Time:0.00057506561279297

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=85 
 Execution Time:0.00045394897460938

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=85 
 Execution Time:0.00039911270141602

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='85' and office_id='1' 
 Execution Time:0.00052285194396973

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.00055193901062012

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00044894218444824

SELECT *
FROM `examination`
WHERE `examination_id` = 85 
 Execution Time:0.00056910514831543

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00025606155395508

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00056290626525879

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.00023698806762695

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00019979476928711

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=85 
 Execution Time:0.00051307678222656

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=85 
 Execution Time:0.00043702125549316

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=85 
 Execution Time:0.00040197372436523

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=85 
 Execution Time:0.00052404403686523

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='85' and office_id='1' 
 Execution Time:0.0004429817199707

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.00041985511779785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 230 
 Execution Time:0.00016307830810547

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 180 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012588500976562

select * from examination where examination_id= '85' and   office_id= '1' 
 Execution Time:0.0008540153503418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 85 
 Execution Time:0.00031208992004395

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.00018596649169922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00059199333190918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036907196044922

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032496452331543

SELECT *
FROM `examination`
WHERE `examination_id` = 85 
 Execution Time:0.0006871223449707

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00029110908508301

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00023698806762695

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.00026798248291016

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00021505355834961

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=85 
 Execution Time:0.00072312355041504

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=85 
 Execution Time:0.00067901611328125

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=85 
 Execution Time:0.0006721019744873

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=85 
 Execution Time:0.00043082237243652

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='85' and office_id='1' 
 Execution Time:0.00049090385437012

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.00022506713867188

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00046896934509277

SELECT *
FROM `examination`
WHERE `examination_id` = 85 
 Execution Time:0.00049304962158203

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.00018000602722168

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00030899047851562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.00020909309387207

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00014901161193848

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=85 
 Execution Time:0.00058913230895996

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=85 
 Execution Time:0.00067996978759766

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=85 
 Execution Time:0.00046491622924805

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=85 
 Execution Time:0.00026607513427734

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='85' and office_id='1' 
 Execution Time:0.00040197372436523

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.0001978874206543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00095701217651367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 230 
 Execution Time:0.00031208992004395

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 180 
 Execution Time:0.00073909759521484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select * from examination where examination_id= '85' and   office_id= '1' 
 Execution Time:0.00092506408691406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 85 
 Execution Time:0.00041103363037109

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.00036001205444336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067710876464844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067710876464844

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046491622924805

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005190372467041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005190372467041

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032401084899902

SELECT *
FROM `examination`
WHERE `examination_id` = 85 
 Execution Time:0.00072407722473145

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 4 
 Execution Time:0.0014629364013672

SELECT *
FROM `user`
WHERE `user_id` = 104 
 Execution Time:0.00041985511779785

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 180 
 Execution Time:0.00034093856811523

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00027585029602051

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=85 
 Execution Time:0.0007011890411377

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=85 
 Execution Time:0.00062799453735352

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=85 
 Execution Time:0.00064802169799805

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=85 
 Execution Time:0.00048589706420898

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='85' and office_id='1' 
 Execution Time:0.00073719024658203

select * from examination_chargesdetails where  examination_id= '85' 
 Execution Time:0.00032997131347656


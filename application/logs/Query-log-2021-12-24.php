select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037338733673096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037338733673096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037338733673096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037338733673096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002234935760498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037338733673096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002234935760498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023269653320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037338733673096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002234935760498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023269653320312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037338733673096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002234935760498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023269653320312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026829242706299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037338733673096

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002234935760498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023269653320312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026829242706299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00059199333190918

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00059199333190918

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00051999092102051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041079521179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041079521179199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041079521179199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041079521179199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041079521179199

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001978874206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.010143041610718

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0061788558959961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.010143041610718

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0061788558959961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0042819976806641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.010143041610718

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0061788558959961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0042819976806641

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.0004580020904541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.00025701522827148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.00017786026000977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select * from examination where examination_id= '40' and   office_id= '1' 
 Execution Time:0.00086307525634766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 40 
 Execution Time:0.00027298927307129

select * from examination_chargesdetails where  examination_id= '40' 
 Execution Time:0.0020010471343994

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022060871124268

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022060871124268

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030112266540527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select * from examination where examination_id= '40' and   office_id= '1' 
 Execution Time:0.00078582763671875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 40 
 Execution Time:0.00037503242492676

select * from examination_chargesdetails where  examination_id= '40' 
 Execution Time:0.00025582313537598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082993507385254

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082993507385254

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003209114074707

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0059130191802979

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00065898895263672

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='8' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.000518798828125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.00040292739868164

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.0003821849822998

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.00040602684020996

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.0084221363067627

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0079269409179688

select * from examination where examination_id= '40' and   office_id= '1' 
 Execution Time:0.00078892707824707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 40 
 Execution Time:0.00034713745117188

select * from examination_chargesdetails where  examination_id= '40' 
 Execution Time:0.00023102760314941

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070500373840332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083589553833008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075602531433105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.00026583671569824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.00017714500427246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select * from examination where examination_id= '41' and   office_id= '1' 
 Execution Time:0.00071501731872559

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 41 
 Execution Time:0.00025296211242676

select * from examination_chargesdetails where  examination_id= '41' 
 Execution Time:0.00018596649169922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003819465637207

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003209114074707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.00031304359436035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.00022101402282715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select * from examination where examination_id= '41' and   office_id= '1' 
 Execution Time:0.00078320503234863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018379688262939

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 41 
 Execution Time:0.00030183792114258

select * from examination_chargesdetails where  examination_id= '41' 
 Execution Time:0.00021886825561523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008080005645752

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0008080005645752

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010900497436523

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00099492073059082

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='8' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084590911865234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062084197998047

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 74 
 Execution Time:0.00035214424133301

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 105 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select * from examination where examination_id= '41' and   office_id= '1' 
 Execution Time:0.00066304206848145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 41 
 Execution Time:0.00034713745117188

select * from examination_chargesdetails where  examination_id= '41' 
 Execution Time:0.00020599365234375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045609474182129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045609474182129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0002138614654541

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00043797492980957

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051188468933105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00046110153198242

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00040197372436523

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00071287155151367

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00071287155151367

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052094459533691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='75' and  office_id= '1' 
 Execution Time:0.0005190372467041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00025510787963867

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 106 
 Execution Time:0.00015401840209961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079178810119629

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079178810119629

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079178810119629

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 106 
 Execution Time:0.00029301643371582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007781982421875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0007781982421875

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045990943908691

select * from examination where examination_id= '42' and   office_id= '1' 
 Execution Time:0.00070405006408691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 42 
 Execution Time:0.0003659725189209

select * from examination_chargesdetails where  examination_id= '42' 
 Execution Time:0.00016617774963379

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085115432739258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 75 
 Execution Time:0.00034999847412109

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 106 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011539459228516

select * from examination where examination_id= '42' and   office_id= '1' 
 Execution Time:0.00084280967712402

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 42 
 Execution Time:0.00066900253295898

select * from examination_chargesdetails where  examination_id= '42' 
 Execution Time:0.00080204010009766

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00060105323791504

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00032210350036621

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='8' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068783760070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074088573455811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074088573455811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074088573455811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020251274108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074088573455811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020251274108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018620491027832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074088573455811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020251274108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018620491027832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019540786743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074088573455811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020251274108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018620491027832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019540786743164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074088573455811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020251274108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018620491027832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019540786743164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023789405822754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0074088573455811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020251274108887

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018620491027832

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019540786743164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023789405822754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060250759124756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016277074813843

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016277074813843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033178091049194

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016277074813843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033178091049194

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018847942352295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016277074813843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033178091049194

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018847942352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.027307033538818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016277074813843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033178091049194

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018847942352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.027307033538818

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.017536163330078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016277074813843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033178091049194

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018847942352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.027307033538818

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.017536163330078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034310817718506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016277074813843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033178091049194

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018847942352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.027307033538818

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.017536163330078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034310817718506

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0096900463104248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.016277074813843

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.033178091049194

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018847942352295

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.027307033538818

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.017536163330078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034310817718506

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0096900463104248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087192058563232


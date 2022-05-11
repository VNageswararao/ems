select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.074494123458862

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.074494123458862

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089719295501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.074494123458862

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089719295501709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024609565734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.074494123458862

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089719295501709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024609565734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019738674163818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.074494123458862

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089719295501709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024609565734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019738674163818

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023119449615479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.074494123458862

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089719295501709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024609565734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019738674163818

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023119449615479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.074494123458862

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089719295501709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024609565734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019738674163818

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023119449615479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029129981994629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.074494123458862

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0089719295501709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024609565734863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019738674163818

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023119449615479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029129981994629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0041069984436035

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0041069984436035

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00027918815612793

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00073504447937012

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00073504447937012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049114227294922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033049583435059

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033049583435059

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0021519660949707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033049583435059

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0023078918457031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0021519660949707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 72 
 Execution Time:0.00054311752319336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 102 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 72 
 Execution Time:0.00032901763916016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 102 
 Execution Time:0.0002448558807373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select * from examination where examination_id= '37' and   office_id= '1' 
 Execution Time:0.0010550022125244

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018219947814941

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 37 
 Execution Time:0.0026350021362305

select * from examination_chargesdetails where  examination_id= '37' 
 Execution Time:0.0019600391387939

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021090507507324

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021090507507324

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029110908508301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 72 
 Execution Time:0.00025606155395508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 102 
 Execution Time:0.00018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select * from examination where examination_id= '37' and   office_id= '1' 
 Execution Time:0.00080704689025879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 37 
 Execution Time:0.00047087669372559

select * from examination_chargesdetails where  examination_id= '37' 
 Execution Time:0.00055098533630371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065803527832031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065803527832031

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00023794174194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029158592224121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002985954284668

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029158592224121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002985954284668

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032100677490234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029158592224121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002985954284668

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0032100677490234

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 72 
 Execution Time:0.00080990791320801

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 102 
 Execution Time:0.00064301490783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.014919996261597

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.014919996261597

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021910667419434

select * from examination where examination_id= '37' and   office_id= '1' 
 Execution Time:0.0030429363250732

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 37 
 Execution Time:0.0039310455322266

select * from examination_chargesdetails where  examination_id= '37' 
 Execution Time:0.012946844100952

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00069785118103027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027408599853516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033369064331055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027408599853516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033369064331055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027408599853516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033369064331055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0028078556060791

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 72 
 Execution Time:0.0016200542449951

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 102 
 Execution Time:0.0040278434753418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003817081451416

select * from examination where examination_id= '37' and   office_id= '1' 
 Execution Time:0.0042960643768311

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0041029453277588

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 37 
 Execution Time:0.0037691593170166

select * from examination_chargesdetails where  examination_id= '37' 
 Execution Time:0.0029499530792236

select * from examination where examination_id= '37' and   office_id= '1' 
 Execution Time:0.0042960643768311

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0041029453277588

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 37 
 Execution Time:0.0037691593170166

select * from examination_chargesdetails where  examination_id= '37' 
 Execution Time:0.0029499530792236

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0013940334320068

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.003464937210083

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.003464937210083

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038611888885498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017672061920166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017672061920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096240043640137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017672061920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096240043640137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058310031890869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017672061920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096240043640137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058310031890869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030479431152344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017672061920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096240043640137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058310031890869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030479431152344

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017672061920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096240043640137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058310031890869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030479431152344

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023429393768311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017672061920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096240043640137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058310031890869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030479431152344

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023429393768311

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031700134277344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.017672061920166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0096240043640137

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0058310031890869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030479431152344

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023429393768311

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031700134277344

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00045394897460938

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00055718421936035

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00055718421936035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039982795715332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039982795715332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039982795715332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070881843566895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039982795715332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070881843566895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017838478088379

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017838478088379

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0017838478088379

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 73 
 Execution Time:0.006148099899292

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 103 
 Execution Time:0.00044918060302734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 73 
 Execution Time:0.00033688545227051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 103 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select * from examination where examination_id= '38' and   office_id= '1' 
 Execution Time:0.00082778930664062

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 38 
 Execution Time:0.00075912475585938

select * from examination_chargesdetails where  examination_id= '38' 
 Execution Time:0.00054097175598145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080418586730957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080418586730957

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 73 
 Execution Time:0.00047898292541504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 103 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056004524230957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056004524230957

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033903121948242

select * from examination where examination_id= '38' and   office_id= '1' 
 Execution Time:0.00083589553833008

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062179565429688

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 38 
 Execution Time:0.00046586990356445

select * from examination_chargesdetails where  examination_id= '38' 
 Execution Time:0.00047683715820312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 73 
 Execution Time:0.00035285949707031

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 103 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select * from examination where examination_id= '38' and   office_id= '1' 
 Execution Time:0.0046589374542236

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016918182373047

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 38 
 Execution Time:0.00085616111755371

select * from examination_chargesdetails where  examination_id= '38' 
 Execution Time:0.0032250881195068

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00079512596130371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013511180877686

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0085699558258057

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00053715705871582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 72 
 Execution Time:0.00030398368835449

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 102 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047111511230469

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047111511230469

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029611587524414

select * from examination where examination_id= '37' and   office_id= '1' 
 Execution Time:0.00092792510986328

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 37 
 Execution Time:0.00038909912109375

select * from examination_chargesdetails where  examination_id= '37' 
 Execution Time:0.00032901763916016

select * from examination where examination_id= '37' and   office_id= '1' 
 Execution Time:0.00092792510986328

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 37 
 Execution Time:0.00038909912109375

select * from examination_chargesdetails where  examination_id= '37' 
 Execution Time:0.00032901763916016

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0004880428314209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020170211791992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0020170211791992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 72 
 Execution Time:0.0002589225769043

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 102 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select * from examination where examination_id= '37' and   office_id= '1' 
 Execution Time:0.0010120868682861

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 37 
 Execution Time:0.00037002563476562

select * from examination_chargesdetails where  examination_id= '37' 
 Execution Time:0.00036787986755371

select * from examination where examination_id= '37' and   office_id= '1' 
 Execution Time:0.0010120868682861

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 37 
 Execution Time:0.00037002563476562

select * from examination_chargesdetails where  examination_id= '37' 
 Execution Time:0.00036787986755371

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00055193901062012

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014185905456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0042722225189209

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0042722225189209

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0029609203338623

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00032901763916016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00058603286743164

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00032901763916016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00058603286743164

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00022792816162109

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00068211555480957

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00068211555480957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00030112266540527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00037908554077148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 104 
 Execution Time:0.00025606155395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00027298927307129

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 104 
 Execution Time:0.00016307830810547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select * from examination where examination_id= '39' and   office_id= '1' 
 Execution Time:0.00068998336791992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 39 
 Execution Time:0.00037097930908203

select * from examination_chargesdetails where  examination_id= '39' 
 Execution Time:0.00041699409484863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074505805969238

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00074505805969238

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003058910369873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.00034904479980469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 104 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00099897384643555

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00099897384643555

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0020260810852051

select * from examination where examination_id= '39' and   office_id= '1' 
 Execution Time:0.0010349750518799

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 39 
 Execution Time:0.00050902366638184

select * from examination_chargesdetails where  examination_id= '39' 
 Execution Time:0.00041103363037109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040569305419922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033910274505615

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040569305419922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033910274505615

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040569305419922

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033910274505615

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 2 
 Execution Time:0.009293794631958

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 104 
 Execution Time:0.00099301338195801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select * from examination where examination_id= '39' and   office_id= '1' 
 Execution Time:0.00090384483337402

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 39 
 Execution Time:0.00043487548828125

select * from examination_chargesdetails where  examination_id= '39' 
 Execution Time:0.00030612945556641

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056695938110352

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033092498779297

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061988830566406

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059390068054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-23' and '2021-12-23' and  patient_registration.office_id= 1      
 Execution Time:0.001413106918335

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036540031433105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036540031433105

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.004939079284668

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-23' and  '2021-12-23' and  billing_master.office_id= 1        
 Execution Time:0.00083613395690918

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-12-23' and  '2021-12-23' and  billing_master.office_id= 1        
 Execution Time:0.00083613395690918

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-12-23' and '2021-12-23' and  patient_registration.office_id= 1      
 Execution Time:0.0014851093292236


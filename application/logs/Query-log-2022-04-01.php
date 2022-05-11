select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026431083679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026431083679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026431083679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025649070739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026431083679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025649070739746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026431083679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025649070739746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011601448059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026431083679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025649070739746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011601448059082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003619909286499

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026431083679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025649070739746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011601448059082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003619909286499

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021669864654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0026431083679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025649070739746

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011601448059082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003619909286499

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021669864654541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029728412628174

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00077295303344727

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00077295303344727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068807601928711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068807601928711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068807601928711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087881088256836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068807601928711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087881088256836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020911693572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098609924316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068807601928711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044584274291992

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087881088256836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020911693572998

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0083351135253906

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039150714874268

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0083351135253906

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039150714874268

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.030168056488037

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.006803035736084

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0083351135253906

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0039150714874268

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.030168056488037

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 732 
 Execution Time:0.00082087516784668

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 843 
 Execution Time:0.00063800811767578

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 843  and `patient_registration_id` = 732 
 Execution Time:0.01288104057312

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 732 
 Execution Time:0.0020480155944824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select * from examination where examination_id= '765' and   office_id= '1' 
 Execution Time:0.0010828971862793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 765 
 Execution Time:0.0046699047088623

select * from examination_chargesdetails where  examination_id= '765' 
 Execution Time:0.0050840377807617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0081319808959961

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0081319808959961

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039019584655762

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0046780109405518

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0046780109405518

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046777725219727

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0032880306243896

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00086712837219238

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='36' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00085687637329102

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='37' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013048648834229

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0030758380889893

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0030758380889893

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00036406517028809

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0094969272613525

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.0094969272613525

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00030207633972168

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 732 
 Execution Time:0.0004730224609375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 843 
 Execution Time:0.0003199577331543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 843  and `patient_registration_id` = 732 
 Execution Time:0.00041699409484863

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 732 
 Execution Time:0.0018160343170166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052380561828613

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052380561828613

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035405158996582

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082993507385254

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082993507385254

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032305717468262

select * from examination where examination_id= '765' and   office_id= '1' 
 Execution Time:0.00082588195800781

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 765 
 Execution Time:0.00038814544677734

select * from examination_chargesdetails where  examination_id= '765' 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012469291687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012469291687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012469291687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039150714874268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012469291687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039150714874268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086808204650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012469291687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039150714874268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086808204650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012469291687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039150714874268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086808204650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012469291687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039150714874268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086808204650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001147985458374

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012469291687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039150714874268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086808204650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001147985458374

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038540363311768

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012469291687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039150714874268

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086808204650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000885009765625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001147985458374

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019259452819824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075292587280273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075292587280273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0051200389862061

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0051200389862061

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082302093505859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082302093505859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016450881958008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016450881958008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024030208587646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010108947753906

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058603286743164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082206726074219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016450881958008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024030208587646

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00095415115356445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015339851379395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015339851379395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015339851379395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0015339851379395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00092005729675293

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0011160373687744

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 732 
 Execution Time:0.00043392181396484

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 843 
 Execution Time:0.00027108192443848

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 843  and `patient_registration_id` = 732 
 Execution Time:0.00098490715026855

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 732 
 Execution Time:0.0015809535980225

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016379356384277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010831356048584

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010831356048584

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041604042053223

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013790130615234

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013790130615234

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select * from examination where examination_id= '765' and   office_id= '1' 
 Execution Time:0.0010271072387695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 765 
 Execution Time:0.0012071132659912

select * from examination_chargesdetails where  examination_id= '765' 
 Execution Time:0.00095701217651367

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0013399124145508

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0013399124145508

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053787231445312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053787231445312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014989376068115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029680728912354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029680728912354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034170150756836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029680728912354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034170150756836

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029680728912354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034170150756836

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0056650638580322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029680728912354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034170150756836

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0056650638580322

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023419857025146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031850337982178

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039610862731934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0027079582214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028398036956787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029680728912354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034170150756836

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0056650638580322

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023419857025146

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029599666595459

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063395500183105

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043177604675293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013320446014404

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013320446014404

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066590309143066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066590309143066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066590309143066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001953125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0027790069580078

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0027790069580078

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025191307067871

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0048990249633789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0027790069580078

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025191307067871

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0048990249633789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002269983291626

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0027790069580078

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025191307067871

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0048990249633789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.002269983291626

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 735 
 Execution Time:0.00059199333190918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 846 
 Execution Time:0.0003659725189209

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 846  and `patient_registration_id` = 735 
 Execution Time:0.0023980140686035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027492046356201

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027492046356201

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038480758666992

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00096607208251953

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0010190010070801

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 735 
 Execution Time:0.00085282325744629

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 846 
 Execution Time:0.00049805641174316

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 846  and `patient_registration_id` = 735 
 Execution Time:0.00057506561279297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 735 
 Execution Time:0.0016078948974609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030179023742676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0050728321075439

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0050728321075439

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046396255493164

select * from examination where examination_id= '768' and   office_id= '1' 
 Execution Time:0.00082302093505859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010421276092529

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 768 
 Execution Time:0.01086688041687

select * from examination_chargesdetails where  examination_id= '768' 
 Execution Time:0.0061028003692627

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011599063873291

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0011599063873291

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039315223693848

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093910694122314

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093910694122314

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.006443977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093910694122314

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.006443977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0096499919891357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093910694122314

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.006443977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0096499919891357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078160762786865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093910694122314

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.006443977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0096499919891357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078160762786865

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013082981109619

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093910694122314

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.006443977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0096499919891357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078160762786865

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013082981109619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022120475769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093910694122314

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.006443977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0096499919891357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078160762786865

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013082981109619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022120475769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0093469619750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093910694122314

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.006443977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0096499919891357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078160762786865

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013082981109619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022120475769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0093469619750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026259422302246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001317024230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0093910694122314

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.006443977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0096499919891357

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078160762786865

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.013082981109619

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022120475769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0093469619750977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026259422302246

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0057229995727539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041451454162598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041451454162598

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043296813964844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058579444885254

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058579444885254

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025081634521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016088485717773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002739429473877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016088485717773

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0044980049133301

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0044980049133301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0044980049133301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026609897613525

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0044980049133301

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026609897613525

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 736 
 Execution Time:0.00058221817016602

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 847 
 Execution Time:0.00076079368591309

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 847  and `patient_registration_id` = 736 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016629695892334

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013751983642578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013751983642578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035715103149414

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021281242370605

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021281242370605

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021281242370605

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 736 
 Execution Time:0.00048613548278809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 847 
 Execution Time:0.00035905838012695

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 847  and `patient_registration_id` = 736 
 Execution Time:0.00054097175598145

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 736 
 Execution Time:0.0022819042205811

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select * from examination where examination_id= '769' and   office_id= '1' 
 Execution Time:0.0013341903686523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 769 
 Execution Time:0.00069093704223633

select * from examination_chargesdetails where  examination_id= '769' 
 Execution Time:0.0006251335144043

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078487396240234

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078487396240234

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048089027404785

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049686431884766

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049686431884766

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034904479980469

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='2' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0016968250274658

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012650489807129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0027070045471191

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00076699256896973

SELECT *
FROM `examination`
WHERE `examination_id` = 769 
 Execution Time:0.0010330677032471

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00063395500183105

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00051188468933105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 736 
 Execution Time:0.00064516067504883

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.0029430389404297

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=769 
 Execution Time:0.005436897277832

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=769 
 Execution Time:0.0038800239562988

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=769 
 Execution Time:0.0010027885437012

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=769 
 Execution Time:0.00085306167602539

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='769' and office_id='1' 
 Execution Time:0.0020461082458496

select * from examination_chargesdetails where  examination_id= '769' 
 Execution Time:0.00049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087714195251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087714195251465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018858909606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066184997558594

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087714195251465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018858909606934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_registration where  patient_registration_id= '720' and  office_id= '1' 
 Execution Time:0.00078701972961426

select count(*) as cnt from patient_registration where  patient_registration_id= '720' and  office_id= '1' 
 Execution Time:0.00078701972961426

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=720  
 Execution Time:0.0030689239501953

select count(*) as cnt from patient_registration where  patient_registration_id= '720' and  office_id= '1' 
 Execution Time:0.00078701972961426

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=720  
 Execution Time:0.0030689239501953

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=720  
 Execution Time:0.0009160041809082

select count(*) as cnt from patient_registration where  patient_registration_id= '720' and  office_id= '1' 
 Execution Time:0.00078701972961426

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=720  
 Execution Time:0.0030689239501953

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=720  
 Execution Time:0.0009160041809082

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='720' and  office_id= '1' 
 Execution Time:0.00024986267089844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00076389312744141

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00076389312744141

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044703483581543

select count(*) as cnt from patient_appointment where  patient_registration_id = 720 and appointment_date= '2022-04-01' 
 Execution Time:0.00069808959960938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 720 
 Execution Time:0.00071597099304199

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 848 
 Execution Time:0.00030612945556641

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 848  and `patient_registration_id` = 720 
 Execution Time:0.00052595138549805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092291831970215

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00092291831970215

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077986717224121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077986717224121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018999576568604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077986717224121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018999576568604

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045609474182129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012028217315674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024914741516113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045609474182129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012028217315674

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090909004211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090909004211426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065302848815918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090909004211426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010330677032471

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038385391235352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041208267211914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041208267211914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041208267211914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041208267211914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041208267211914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039291381835938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041208267211914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039291381835938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041208267211914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039291381835938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094890594482422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041208267211914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039291381835938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094890594482422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020391941070557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041208267211914

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039291381835938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094890594482422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020391941070557

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089097023010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089097023010254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001640796661377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089097023010254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001640796661377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013589859008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034999847412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014686584472656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013589859008789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012493133544922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034999847412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098204612731934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041890144348145

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008699893951416

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008699893951416

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041508674621582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011649131774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023412704467773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014114379882812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041508674621582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011649131774902

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00036382675170898

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00036382675170898

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=545  
 Execution Time:0.0036590099334717

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00036382675170898

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=545  
 Execution Time:0.0036590099334717

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=545  
 Execution Time:0.003896951675415

select count(*) as cnt from patient_registration where  patient_registration_id= '545' and  office_id= '1' 
 Execution Time:0.00036382675170898

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=545  
 Execution Time:0.0036590099334717

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=545  
 Execution Time:0.003896951675415

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='545' and  office_id= '1' 
 Execution Time:0.0016469955444336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 737 
 Execution Time:0.00032687187194824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 849 
 Execution Time:0.0003969669342041

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 849  and `patient_registration_id` = 737 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074195861816406

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0023291110992432

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0023291110992432

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0023291110992432

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0071978569030762

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0023291110992432

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001209020614624

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0071978569030762

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 738 
 Execution Time:0.0031089782714844

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 850 
 Execution Time:0.0029680728912354

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 850  and `patient_registration_id` = 738 
 Execution Time:0.0021319389343262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021460056304932

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021460056304932

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060486793518066

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 720 
 Execution Time:0.00058388710021973

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 848 
 Execution Time:0.00050687789916992

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 848  and `patient_registration_id` = 720 
 Execution Time:0.00056099891662598

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 720 
 Execution Time:0.0042769908905029

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select * from examination where examination_id= '770' and   office_id= '1' 
 Execution Time:0.00074911117553711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 770 
 Execution Time:0.00060701370239258

select * from examination_chargesdetails where  examination_id= '770' 
 Execution Time:0.00042080879211426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058412551879883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058412551879883

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038695335388184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011930465698242

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011930465698242

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035881996154785

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00086188316345215

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00089001655578613

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00059390068054199

SELECT *
FROM `examination`
WHERE `examination_id` = 770 
 Execution Time:0.00085592269897461

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00037789344787598

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00048589706420898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 720 
 Execution Time:0.00039196014404297

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.00063085556030273

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=770 
 Execution Time:0.0020937919616699

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=770 
 Execution Time:0.0010828971862793

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=770 
 Execution Time:0.00084614753723145

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=770 
 Execution Time:0.00052905082702637

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='770' and office_id='1' 
 Execution Time:0.0017669200897217

select * from examination_chargesdetails where  examination_id= '770' 
 Execution Time:0.00039005279541016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 720 
 Execution Time:0.00034403800964355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 848 
 Execution Time:0.00024509429931641

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 848  and `patient_registration_id` = 720 
 Execution Time:0.00035309791564941

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 720 
 Execution Time:0.0018260478973389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037679672241211

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064706802368164

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00064706802368164

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035500526428223

select * from examination where examination_id= '770' and   office_id= '1' 
 Execution Time:0.00062894821166992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 770 
 Execution Time:0.0002288818359375

select * from examination_chargesdetails where  examination_id= '770' 
 Execution Time:0.00023293495178223

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073885917663574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073885917663574

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047802925109863

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='3' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00053310394287109

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00037384033203125

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00058102607727051

SELECT *
FROM `examination`
WHERE `examination_id` = 770 
 Execution Time:0.0007479190826416

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00034189224243164

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00044393539428711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 720 
 Execution Time:0.00047087669372559

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.00038909912109375

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=770 
 Execution Time:0.0013840198516846

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=770 
 Execution Time:0.00084710121154785

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=770 
 Execution Time:0.0006561279296875

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=770 
 Execution Time:0.00063085556030273

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='770' and office_id='1' 
 Execution Time:0.0020010471343994

select * from examination_chargesdetails where  examination_id= '770' 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081896781921387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081896781921387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081896781921387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081896781921387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011100769042969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081896781921387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011100769042969

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018749237060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095486640930176

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081896781921387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011100769042969

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018749237060547

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071096420288086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071096420288086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011749267578125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003201961517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039291381835938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016188621520996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015687942504883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039291381835938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095891952514648

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012819766998291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012819766998291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022680759429932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075316429138184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012819766998291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022680759429932

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010311603546143

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049901008605957

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006709098815918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006709098815918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001413106918335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085020065307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085020065307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085020065307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085020065307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085020065307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021169185638428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085020065307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021169185638428

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085020065307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021169185638428

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085020065307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021169185638428

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071120262145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085020065307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021169185638428

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071120262145996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085020065307617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00070786476135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021169185638428

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071120262145996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 737 
 Execution Time:0.00042390823364258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 849 
 Execution Time:0.00024199485778809

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 849  and `patient_registration_id` = 737 
 Execution Time:0.00060796737670898

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 737 
 Execution Time:0.0014359951019287

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select * from examination where examination_id= '771' and   office_id= '1' 
 Execution Time:0.00077915191650391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032110214233398

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 771 
 Execution Time:0.00057077407836914

select * from examination_chargesdetails where  examination_id= '771' 
 Execution Time:0.00063610076904297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062203407287598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00062203407287598

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00032186508178711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072503089904785

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072503089904785

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0027649402618408

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00069022178649902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 737 
 Execution Time:0.00025486946105957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 849 
 Execution Time:0.00019192695617676

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 849  and `patient_registration_id` = 737 
 Execution Time:0.00023388862609863

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 737 
 Execution Time:0.0010969638824463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001521110534668

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056791305541992

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00056791305541992

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028204917907715

select * from examination where examination_id= '771' and   office_id= '1' 
 Execution Time:0.00087308883666992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 771 
 Execution Time:0.00061392784118652

select * from examination_chargesdetails where  examination_id= '771' 
 Execution Time:0.00040411949157715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078511238098145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078511238098145

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028395652770996

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='1' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010890960693359

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00042891502380371

SELECT *
FROM `examination`
WHERE `examination_id` = 771 
 Execution Time:0.0009160041809082

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00031399726867676

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00026297569274902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 737 
 Execution Time:0.0002589225769043

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00025796890258789

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=771 
 Execution Time:0.0019359588623047

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=771 
 Execution Time:0.00093197822570801

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=771 
 Execution Time:0.00069713592529297

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=771 
 Execution Time:0.00063490867614746

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='771' and office_id='1' 
 Execution Time:0.001086950302124

select * from examination_chargesdetails where  examination_id= '771' 
 Execution Time:0.00044083595275879

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081419944763184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081419944763184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081419944763184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00081419944763184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058913230895996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064516067504883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 738 
 Execution Time:0.00034785270690918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 850 
 Execution Time:0.00033998489379883

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 850  and `patient_registration_id` = 738 
 Execution Time:0.00048589706420898

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 738 
 Execution Time:0.0010571479797363

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select * from examination where examination_id= '772' and   office_id= '1' 
 Execution Time:0.00072717666625977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 772 
 Execution Time:0.00035810470581055

select * from examination_chargesdetails where  examination_id= '772' 
 Execution Time:0.00033187866210938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005791187286377

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063109397888184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063109397888184

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003349781036377

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00050783157348633

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00075602531433105

SELECT *
FROM `examination`
WHERE `examination_id` = 772 
 Execution Time:0.00076889991760254

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00022721290588379

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00058794021606445

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 738 
 Execution Time:0.00023889541625977

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00018310546875

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=772 
 Execution Time:0.0012040138244629

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=772 
 Execution Time:0.00051689147949219

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=772 
 Execution Time:0.00036907196044922

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=772 
 Execution Time:0.00081205368041992

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='772' and office_id='1' 
 Execution Time:0.0015709400177002

select * from examination_chargesdetails where  examination_id= '772' 
 Execution Time:0.00025320053100586

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025839805603027

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025839805603027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003242015838623

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020291805267334

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025839805603027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003242015838623

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020291805267334

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0025839805603027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003242015838623

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0020291805267334

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 739 
 Execution Time:0.00061392784118652

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 851 
 Execution Time:0.0016789436340332

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 851  and `patient_registration_id` = 739 
 Execution Time:0.0038158893585205

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039188861846924

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059890747070312

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035309791564941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019421577453613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019421577453613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021381378173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019421577453613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021381378173828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020618438720703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020618438720703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020618438720703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039570331573486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020618438720703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039570331573486

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020618438720703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039570331573486

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020618438720703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039570331573486

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011417865753174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020618438720703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039570331573486

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011417865753174

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029850006103516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002877950668335

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020618438720703

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0039570331573486

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011417865753174

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029850006103516

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013828277587891

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037040710449219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037040710449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025260448455811

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037040710449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025260448455811

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037040710449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0025260448455811

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 735 
 Execution Time:0.0009760856628418

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 846 
 Execution Time:0.0031571388244629

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 846  and `patient_registration_id` = 735 
 Execution Time:0.0041289329528809

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 735 
 Execution Time:0.0030920505523682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032830238342285

select * from examination where examination_id= '768' and   office_id= '1' 
 Execution Time:0.0010700225830078

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0045130252838135

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 768 
 Execution Time:0.0021400451660156

select * from examination_chargesdetails where  examination_id= '768' 
 Execution Time:0.002708911895752

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011417865753174

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011417865753174

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052690505981445

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00090694427490234

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00090694427490234

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003969669342041

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040950775146484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.010954141616821

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040950775146484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.010954141616821

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0057621002197266

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0037810802459717

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0040950775146484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.010954141616821

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0057621002197266

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.003169059753418

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.0039920806884766

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.0024940967559814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026190280914307

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026190280914307

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00031900405883789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058507919311523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.00041389465332031

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00029397010803223

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075292587280273

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075292587280273

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057387351989746

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 34 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 271 
 Execution Time:0.00033903121948242

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 271  and `patient_registration_id` = 34 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016510486602783

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016510486602783

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0051689147949219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002039909362793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002039909362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021021366119385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002039909362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021021366119385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002039909362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021021366119385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025351047515869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002039909362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021021366119385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025351047515869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025060176849365

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021541118621826

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020091533660889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021469593048096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002039909362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021021366119385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025351047515869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024840831756592

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00051093101501465

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00019383430480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076007843017578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010130405426025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010130405426025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010130405426025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00040102005004883

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0010499954223633

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0010499954223633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001943826675415

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001943826675415

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041890144348145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001943826675415

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 204 
 Execution Time:0.00025200843811035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 274 
 Execution Time:0.00016903877258301

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 274  and `patient_registration_id` = 204 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072598457336426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072598457336426

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 204 
 Execution Time:0.0006709098815918

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 274 
 Execution Time:0.00040507316589355

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 274  and `patient_registration_id` = 204 
 Execution Time:0.00060701370239258

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 204 
 Execution Time:0.00084209442138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select * from examination where examination_id= '101' and   office_id= '1' 
 Execution Time:0.0009770393371582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 101 
 Execution Time:0.0034821033477783

select * from examination_chargesdetails where  examination_id= '101' 
 Execution Time:0.0024271011352539

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00094103813171387

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00094103813171387

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029819011688232

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029819011688232

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043106079101562

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-04-01' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.001255989074707

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-04-01' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.001255989074707

select * from ipdcharge where  ipdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00033903121948242

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='61' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0016779899597168

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='61' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0016779899597168

select * from ipdcharge where  ipdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.0007941722869873

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='61' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0016779899597168

select * from ipdcharge where  ipdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.0007941722869873

select user_id,name from  user where user_type=6 
 Execution Time:0.00065898895263672

select examination_treatmentplan.bedno,examination_treatmentplan.referredby,examination_treatmentplan.roomno,patient_registration.mobileno,examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='61' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0016779899597168

select * from ipdcharge where  ipdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.0007941722869873

select user_id,name from  user where user_type=6 
 Execution Time:0.00065898895263672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081396102905273

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00081396102905273

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0024940967559814

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0024940967559814

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0024940967559814

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0024940967559814

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00012087821960449

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068187713623047

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068187713623047

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select ipdcharge_id , name,amount from  ipdcharge where department_id=9 and office_id=1 
 Execution Time:0.00092005729675293

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-04-01' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0015640258789062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00094103813171387

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-04-01' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0011529922485352

select preoperative_appointment_id,DATE_FORMAT(preoperative_appointment.admission_date,'%d/%m/%Y') AS admission_date,department.name as opname,CONCAT(fname , ' ',  lname ,'') AS pateint_name,mrdno,gender,ageyy,mobileno,operating_surgon,typeof_anthesia,typeof_surgery_id,particular_type,eye from preoperative_appointment inner join patient_registration on patient_registration.patient_registration_id=preoperative_appointment.patient_registration_id left join department on department.department_id=preoperative_appointment.typeof_surgery_id where charge_id='2' and admission_date='2022-04-01' and preoperative_appointment.office_id='1' and preoperative_appointment.cancel_flag=0 
 Execution Time:0.0011529922485352

select doctors_registration.name as doctorname from doctors_registration where doctors_registration_id=6 
 Execution Time:0.00045919418334961

select doctors_registration.name as doctorname from doctors_registration where doctors_registration_id=8 
 Execution Time:0.00011992454528809

select name  from doctors_registration where doctors_registration_id=6 
 Execution Time:8.2015991210938E-5

select ipdcharge_id , name,amount from  ipdcharge where department_id=9 and ipdcharge_id=16 and office_id=1 
 Execution Time:0.00044393539428711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010221004486084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089406967163086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029990673065186

select count(*) as cnt from patient_registration where  patient_registration_id= '204' and  office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from patient_registration where  patient_registration_id= '204' and  office_id= '1' 
 Execution Time:0.00032496452331543

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=204  
 Execution Time:0.002392053604126

select count(*) as cnt from patient_registration where  patient_registration_id= '204' and  office_id= '1' 
 Execution Time:0.00032496452331543

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=204  
 Execution Time:0.002392053604126

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=204  
 Execution Time:0.00065898895263672

select count(*) as cnt from patient_registration where  patient_registration_id= '204' and  office_id= '1' 
 Execution Time:0.00032496452331543

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=204  
 Execution Time:0.002392053604126

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=204  
 Execution Time:0.00065898895263672

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='204' and  office_id= '1' 
 Execution Time:0.00016403198242188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034308433532715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034308433532715

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select * from ipdcharge where  ipdcharge_id=16  and office_id= 1 and status=1 
 Execution Time:0.00058507919311523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006721019744873

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00035381317138672

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00035381317138672

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0025029182434082

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00035381317138672

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0025029182434082

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=3  
 Execution Time:0.00059986114501953

select count(*) as cnt from patient_registration where  patient_registration_id= '3' and  office_id= '1' 
 Execution Time:0.00035381317138672

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=3  
 Execution Time:0.0025029182434082

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=3  
 Execution Time:0.00059986114501953

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3' and  office_id= '1' 
 Execution Time:0.0007331371307373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003809928894043

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.00082111358642578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0018620491027832

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00072193145751953

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.00072193145751953

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00041508674621582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 204 
 Execution Time:0.00024008750915527

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 274 
 Execution Time:0.00021576881408691

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 274  and `patient_registration_id` = 204 
 Execution Time:0.0025489330291748

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 204 
 Execution Time:0.0053610801696777

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082707405090332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00082707405090332

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00059103965759277

select * from examination where examination_id= '101' and   office_id= '1' 
 Execution Time:0.0009620189666748

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 101 
 Execution Time:0.00074195861816406

select * from examination_chargesdetails where  examination_id= '101' 
 Execution Time:0.00049209594726562

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072693824768066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072693824768066

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select medicine.category_id,medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0033140182495117


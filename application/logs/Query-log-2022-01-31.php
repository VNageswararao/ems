select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020210742950439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020210742950439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020210742950439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020089149475098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020210742950439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020089149475098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047280788421631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020210742950439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020089149475098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047280788421631

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020210742950439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020089149475098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047280788421631

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041739940643311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020210742950439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020089149475098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047280788421631

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041739940643311

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027890205383301

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0020210742950439

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021049976348877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020089149475098

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0047280788421631

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041739940643311

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001039981842041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036468505859375

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00038599967956543

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00053596496582031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033969879150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033969879150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033969879150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033969879150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0084259510040283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033969879150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0084259510040283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033969879150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0084259510040283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033969879150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0084259510040283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037679672241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033969879150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0084259510040283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037679672241211

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038650035858154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033969879150391

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0084259510040283

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037679672241211

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038650035858154

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035028457641602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.01329493522644

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.01329493522644

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.01329493522644

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0028789043426514

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023260116577148

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.0033700466156006

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 196 
 Execution Time:0.00088119506835938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.0012540817260742

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 196 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0048959255218506

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0048959255218506

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099802017211914

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0048959255218506

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.00083684921264648

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 196 
 Execution Time:0.00092196464538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select * from examination where examination_id= '67' and   office_id= '1' 
 Execution Time:0.0027279853820801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0016641616821289

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 67 
 Execution Time:0.048118829727173

select * from examination_chargesdetails where  examination_id= '67' 
 Execution Time:0.021034002304077

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.043816089630127

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.043816089630127

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072813034057617

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.013458013534546

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.013458013534546

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014350414276123

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 196 
 Execution Time:0.00022006034851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select * from examination where examination_id= '67' and   office_id= '1' 
 Execution Time:0.0010690689086914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 67 
 Execution Time:0.0004889965057373

select * from examination_chargesdetails where  examination_id= '67' 
 Execution Time:0.00034713745117188

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078105926513672

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078105926513672

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063800811767578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073099136352539

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073099136352539

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043487548828125

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.014819145202637

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079894065856934

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='12' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00060796737670898

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='26' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071501731872559

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00051593780517578

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0030889511108398

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.0030889511108398

select * from laser where  office_id= 1 and status=1 
 Execution Time:0.00039291381835938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00084686279296875

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00084686279296875

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060701370239258

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-01-31' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0014350414276123

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 0 and  date(examination_treatmentplan.created_date)='2022-01-31' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0014350414276123

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='17' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0011610984802246

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='17' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.0011610984802246

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00039577484130859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050210952758789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050210952758789

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-01-31' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011100769042969

select examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan.status = 2 and  date(examination_treatmentplan.created_date)='2022-01-31' and chargetype_id = '2' and   examination_treatmentplan.office_id= '1' group by examination_treatmentplan.examination_id 
 Execution Time:0.0011100769042969

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00032496452331543

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='17' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00073099136352539

select examination_treatmentplan.open_remarks,pending_remarks,completed_remarks,cancel_remarks,examination_treatmentplan.examination_treatmentplan_id,patient_registration.mobileno,examination_treatmentplan.chargetype_id,doctors_registration.name as doctorname,DATE_FORMAT(examination_treatmentplan.appointment_date,'%d/%m/%Y') AS appointment_date,examination_treatmentplan.doctor_id,mrdno,examination_treatmentplan.particular_id,eye,if(counseling_id=1,'Yes','No') as status,examination.patient_registration_id,CONCAT(fname , ' ',  lname ,'') AS pateint_name from examination_treatmentplan inner join examination on examination.examination_id=examination_treatmentplan.examination_id 
        inner join patient_registration on patient_registration.patient_registration_id=examination.patient_registration_id
        inner join doctors_registration on doctors_registration.doctors_registration_id=examination_treatmentplan.doctor_id
          where examination_treatmentplan_id='17' and examination_treatmentplan.office_id= '1' 
 Execution Time:0.00073099136352539

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00078892707824707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067305564880371

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003049373626709


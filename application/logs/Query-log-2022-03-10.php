select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002112865447998

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002112865447998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023701190948486

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002112865447998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023701190948486

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002112865447998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0023701190948486

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0021140575408936

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0025420188903809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 355 
 Execution Time:0.00030779838562012

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 384 
 Execution Time:0.00019121170043945

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 384  and `patient_registration_id` = 355 
 Execution Time:0.001554012298584

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 355 
 Execution Time:0.00090384483337402

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0023288726806641

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0023288726806641

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028085708618164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021858215332031

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0021858215332031

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034809112548828

select * from examination where examination_id= '337' and   office_id= '1' 
 Execution Time:0.00080204010009766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 337 
 Execution Time:0.0020990371704102

select * from examination_chargesdetails where  examination_id= '337' 
 Execution Time:0.0019478797912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024888515472412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024888515472412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0059869289398193

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024888515472412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0059869289398193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011961936950684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024888515472412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0059869289398193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011961936950684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022990703582764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024888515472412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0059869289398193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011961936950684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022990703582764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033690929412842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024888515472412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0059869289398193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011961936950684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022990703582764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033690929412842

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024888515472412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0059869289398193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011961936950684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022990703582764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033690929412842

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036239624023438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024888515472412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0059869289398193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011961936950684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022990703582764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033690929412842

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036239624023438

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033040046691895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024888515472412

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0059869289398193

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.011961936950684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022990703582764

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033690929412842

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036239624023438

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0042390823364258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0022540092468262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select * from medicine where medicine_id='27' and office_id= '1' 
 Execution Time:0.0004279613494873

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select * from medicine where medicine_id='27' and office_id= '1' 
 Execution Time:0.0004279613494873

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00067591667175293

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select * from medicine where medicine_id='76' and office_id= '1' 
 Execution Time:0.00038599967956543

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00084018707275391

select * from medicine where medicine_id='76' and office_id= '1' 
 Execution Time:0.00038599967956543

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00084018707275391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select * from medicine where medicine_id='38' and office_id= '1' 
 Execution Time:0.00041294097900391

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select * from medicine where medicine_id='38' and office_id= '1' 
 Execution Time:0.00041294097900391

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00028181076049805

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select * from medicine where medicine_id='82' and office_id= '1' 
 Execution Time:0.00061678886413574

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select * from medicine where medicine_id='82' and office_id= '1' 
 Execution Time:0.00061678886413574

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001223087310791

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001223087310791

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001223087310791

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00061988830566406

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 374 
 Execution Time:0.00032305717468262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 403 
 Execution Time:0.00026297569274902

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 403  and `patient_registration_id` = 374 
 Execution Time:0.0010490417480469

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 374 
 Execution Time:0.0010800361633301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select * from examination where examination_id= '355' and   office_id= '1' 
 Execution Time:0.0012960433959961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 355 
 Execution Time:0.002810001373291

select * from examination_chargesdetails where  examination_id= '355' 
 Execution Time:0.0017080307006836

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001471996307373

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.001471996307373

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048613548278809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012249946594238

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012249946594238

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00026798248291016

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='38' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075793266296387

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00077486038208008

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00064492225646973

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00032687187194824

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='38' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0037407875061035

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0050671100616455

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='38' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0026261806488037

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0020220279693604

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014498233795166

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075006484985352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075006484985352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00019693374633789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047802925109863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042028427124023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042028427124023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042028427124023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011148452758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042028427124023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011148452758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042028427124023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011148452758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011050701141357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042028427124023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011148452758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011050701141357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042028427124023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011148452758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011050701141357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042028427124023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011148452758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011050701141357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010471343994141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042028427124023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011148452758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011050701141357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010471343994141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0042028427124023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011148452758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011050701141357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010471343994141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012309551239014

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056982040405273

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056982040405273

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093412399291992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093412399291992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099706649780273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099706649780273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012581348419189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099706649780273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012581348419189

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0010919570922852

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 375 
 Execution Time:0.00028610229492188

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 404 
 Execution Time:0.00025105476379395

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 404  and `patient_registration_id` = 375 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075602531433105

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075602531433105

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024700164794922

select count(*) as cnt from patient_registration where  patient_registration_id= '359' and  office_id= '1' 
 Execution Time:0.00046586990356445

select count(*) as cnt from patient_registration where  patient_registration_id= '359' and  office_id= '1' 
 Execution Time:0.00046586990356445

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=359  
 Execution Time:0.0033109188079834

select count(*) as cnt from patient_registration where  patient_registration_id= '359' and  office_id= '1' 
 Execution Time:0.00046586990356445

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=359  
 Execution Time:0.0033109188079834

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=359  
 Execution Time:0.0012929439544678

select count(*) as cnt from patient_registration where  patient_registration_id= '359' and  office_id= '1' 
 Execution Time:0.00046586990356445

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=359  
 Execution Time:0.0033109188079834

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=359  
 Execution Time:0.0012929439544678

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='359' and  office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023603439331055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0006868839263916

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 376 
 Execution Time:0.00052094459533691

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 405 
 Execution Time:0.00037312507629395

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 405  and `patient_registration_id` = 376 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008389949798584

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0008389949798584

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016450881958008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016450881958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016450881958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0044100284576416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016450881958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0044100284576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016450881958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0044100284576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043179988861084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016450881958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0044100284576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043179988861084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016450881958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0044100284576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043179988861084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039598941802979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016450881958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0044100284576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043179988861084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039598941802979

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040810108184814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016450881958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0044100284576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043179988861084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039598941802979

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040810108184814

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006972074508667

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016450881958008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027480125427246

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0044100284576416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014328956604004

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043179988861084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024049282073975

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039598941802979

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040810108184814

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006972074508667

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050783157348633

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050783157348633

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034308433532715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077199935913086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077199935913086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0025959014892578

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0062739849090576

select * from medicine where medicine_id='21' and office_id= '1' 
 Execution Time:0.00060701370239258

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select * from medicine where medicine_id='21' and office_id= '1' 
 Execution Time:0.00060701370239258

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00081896781921387

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select * from medicine where medicine_id='25' and office_id= '1' 
 Execution Time:0.00046896934509277

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select * from medicine where medicine_id='25' and office_id= '1' 
 Execution Time:0.00046896934509277

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00090289115905762

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select * from medicine where medicine_id='4' and office_id= '1' 
 Execution Time:0.00037598609924316

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select * from medicine where medicine_id='4' and office_id= '1' 
 Execution Time:0.00037598609924316

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00066995620727539

SELECT *
FROM `examination`
WHERE `examination_id` = 208 
 Execution Time:0.0006859302520752

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00025200843811035

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00034093856811523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 229 
 Execution Time:0.00024318695068359

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 1 
 Execution Time:0.00077605247497559

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=208 
 Execution Time:0.0018918514251709

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=208 
 Execution Time:0.0023138523101807

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=208 
 Execution Time:0.0011239051818848

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=208 
 Execution Time:0.0071601867675781

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='208' and office_id='1' 
 Execution Time:0.0023260116577148

select * from examination_chargesdetails where  examination_id= '208' 
 Execution Time:0.0034260749816895

select count(*) as cnt from medicine_templates where  name = 'YAG PI' and office_id= '1' 
 Execution Time:0.00062298774719238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00054717063903809

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select * from medicine where medicine_id='23' and office_id= '1' 
 Execution Time:0.00065898895263672

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select * from medicine where medicine_id='23' and office_id= '1' 
 Execution Time:0.00065898895263672

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select * from medicine where medicine_id='9' and office_id= '1' 
 Execution Time:0.00050020217895508

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select * from medicine where medicine_id='9' and office_id= '1' 
 Execution Time:0.00050020217895508

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select medicine_instruction_id,name,days from  medicine_instruction where category_id='9' and  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select * from medicine where medicine_id='19' and office_id= '1' 
 Execution Time:0.00034904479980469

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select * from medicine where medicine_id='19' and office_id= '1' 
 Execution Time:0.00034904479980469

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select medicine_instruction_id,name,days from  medicine_instruction where category_id='10' and  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010265111923218

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010265111923218

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010265111923218

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019421577453613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010265111923218

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019421577453613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010265111923218

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019421577453613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010265111923218

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019421577453613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025711059570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010265111923218

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019421577453613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025711059570312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038321018218994

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037379264831543

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.010265111923218

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019421577453613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002234935760498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025711059570312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007178783416748

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030379295349121

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00087404251098633

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00087404251098633

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00036001205444336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0008549690246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 375 
 Execution Time:0.00050616264343262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 404 
 Execution Time:0.00036001205444336

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 404  and `patient_registration_id` = 375 
 Execution Time:0.00076103210449219

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 375 
 Execution Time:0.0015079975128174

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select * from examination where examination_id= '356' and   office_id= '1' 
 Execution Time:0.0012571811676025

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 356 
 Execution Time:0.00072002410888672

select * from examination_chargesdetails where  examination_id= '356' 
 Execution Time:0.00039911270141602

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073099136352539

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073099136352539

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00029683113098145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002108097076416

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002108097076416

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046300888061523

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0026848316192627

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0026848316192627

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0019412040710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066685676574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066685676574707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066685676574707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013740062713623

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022361278533936

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019521713256836

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022361278533936

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019521713256836

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022361278533936

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0019521713256836

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.0003209114074707

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 238 
 Execution Time:0.00044703483581543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 238  and `patient_registration_id` = 185 
 Execution Time:0.0022029876708984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='65' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011160373687744

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025858879089355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0025858879089355

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00048303604125977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 376 
 Execution Time:0.00028204917907715

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 405 
 Execution Time:0.00024294853210449

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 405  and `patient_registration_id` = 376 
 Execution Time:0.00026988983154297

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 376 
 Execution Time:0.00091791152954102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select * from examination where examination_id= '357' and   office_id= '1' 
 Execution Time:0.00069499015808105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 357 
 Execution Time:0.00031399726867676

select * from examination_chargesdetails where  examination_id= '357' 
 Execution Time:0.0002748966217041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070714950561523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070714950561523

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047993659973145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00084590911865234

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00084590911865234

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044584274291992

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057888031005859

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 185 
 Execution Time:0.00030612945556641

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 238 
 Execution Time:0.00027990341186523

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 238  and `patient_registration_id` = 185 
 Execution Time:0.00031518936157227

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 185 
 Execution Time:0.00088596343994141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select * from examination where examination_id= '90' and   office_id= '1' 
 Execution Time:0.0016970634460449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 90 
 Execution Time:0.00052499771118164

select * from examination_chargesdetails where  examination_id= '90' 
 Execution Time:0.0022659301757812

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002824068069458

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002824068069458

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046682357788086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085091590881348

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00085091590881348

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033187866210938

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00083184242248535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057411193847656

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 376 
 Execution Time:0.00031900405883789

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 405 
 Execution Time:0.00020599365234375

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 405  and `patient_registration_id` = 376 
 Execution Time:0.00031709671020508

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 376 
 Execution Time:0.00072598457336426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select * from examination where examination_id= '357' and   office_id= '1' 
 Execution Time:0.00074601173400879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 357 
 Execution Time:0.00023794174194336

select * from examination_chargesdetails where  examination_id= '357' 
 Execution Time:0.00023007392883301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010769367218018

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010769367218018

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042200088500977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077390670776367

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077390670776367

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027918815612793

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059795379638672

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='25' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014398097991943

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='28' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075101852416992

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='29' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00082898139953613

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='21' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00063991546630859

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='13' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0009000301361084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023508071899414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023508071899414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 375 
 Execution Time:0.00035309791564941

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 404 
 Execution Time:0.00030994415283203

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 404  and `patient_registration_id` = 375 
 Execution Time:0.00029397010803223

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 375 
 Execution Time:0.0010960102081299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select * from examination where examination_id= '356' and   office_id= '1' 
 Execution Time:0.00081706047058105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 356 
 Execution Time:0.00040102005004883

select * from examination_chargesdetails where  examination_id= '356' 
 Execution Time:0.00041699409484863

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035786628723145

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070309638977051

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070309638977051

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 359 
 Execution Time:0.00032520294189453

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 406 
 Execution Time:0.00028085708618164

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 406  and `patient_registration_id` = 359 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002281665802002

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034010410308838

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0034010410308838

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0033650398254395

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0038189888000488

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select medicine_instruction_id,name,days from  medicine_instruction where category_id='8' and  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089287757873535

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 376 
 Execution Time:0.0025639533996582

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 405 
 Execution Time:0.00042104721069336

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 405  and `patient_registration_id` = 376 
 Execution Time:0.00025105476379395

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 376 
 Execution Time:0.00098395347595215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select * from examination where examination_id= '357' and   office_id= '1' 
 Execution Time:0.00069618225097656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 357 
 Execution Time:0.00016903877258301

select * from examination_chargesdetails where  examination_id= '357' 
 Execution Time:0.0001528263092041

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013768672943115

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013768672943115

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035810470581055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041317939758301

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041317939758301

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029110908508301

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0012950897216797

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.0012950897216797

select medicine_instruction_id,name,days from  medicine_instruction where category_id='1' and  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select count(*) as cnt from medicine where  name = 'Alphagan -p' and office_id= '1' 
 Execution Time:0.00034093856811523

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00049304962158203

SELECT *
FROM `examination`
WHERE `examination_id` = 356 
 Execution Time:0.00049901008605957

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.0002131462097168

SELECT *
FROM `user`
WHERE `user_id` = 107 
 Execution Time:0.00034284591674805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 375 
 Execution Time:0.00018405914306641

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00067710876464844

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=356 
 Execution Time:0.0010190010070801

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=356 
 Execution Time:0.00088191032409668

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=356 
 Execution Time:0.00062394142150879

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=356 
 Execution Time:0.00022602081298828

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='356' and office_id='1' 
 Execution Time:0.00088000297546387

select * from examination_chargesdetails where  examination_id= '356' 
 Execution Time:0.00015401840209961

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00013399124145508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 375 
 Execution Time:0.00020408630371094

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 404 
 Execution Time:0.00015497207641602

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 404  and `patient_registration_id` = 375 
 Execution Time:0.00011801719665527

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 375 
 Execution Time:0.00062680244445801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012302398681641

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058293342590332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058293342590332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00031280517578125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033402442932129

select * from examination where examination_id= '356' and   office_id= '1' 
 Execution Time:0.00086784362792969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 356 
 Execution Time:0.00024890899658203

select * from examination_chargesdetails where  examination_id= '356' 
 Execution Time:0.00023508071899414

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041913986206055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 359 
 Execution Time:0.00033092498779297

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 406 
 Execution Time:0.00022101402282715

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 406  and `patient_registration_id` = 359 
 Execution Time:0.00052785873413086

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 359 
 Execution Time:0.00089001655578613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045204162597656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00045204162597656

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042104721069336

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030112266540527

select * from examination where examination_id= '358' and   office_id= '1' 
 Execution Time:0.00077009201049805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 358 
 Execution Time:0.00029706954956055

select * from examination_chargesdetails where  examination_id= '358' 
 Execution Time:0.00029277801513672

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='98' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00068998336791992

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0018022060394287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082993507385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082993507385254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082993507385254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 377 
 Execution Time:0.00040793418884277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 407 
 Execution Time:0.00027108192443848

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 407  and `patient_registration_id` = 377 
 Execution Time:0.00055885314941406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010659694671631

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010659694671631

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035405158996582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061488151550293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061488151550293

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094914436340332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094914436340332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035715103149414

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083708763122559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031495094299316

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078392028808594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078392028808594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021488666534424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065739154815674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065739154815674

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065739154815674

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003389835357666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065739154815674

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003389835357666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038390159606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065739154815674

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003389835357666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038390159606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065739154815674

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003389835357666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038390159606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040829181671143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065739154815674

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003389835357666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038390159606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040829181671143

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015549659729004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065739154815674

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003389835357666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038390159606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040829181671143

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015549659729004

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051028728485107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010467052459717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0065739154815674

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034549236297607

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003389835357666

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038390159606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038130283355713

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040829181671143

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015549659729004

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051028728485107

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0043861865997314

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 379 
 Execution Time:0.00029110908508301

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 409 
 Execution Time:0.00017404556274414

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 409  and `patient_registration_id` = 379 
 Execution Time:0.00014710426330566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012397766113281

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006558895111084

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0006558895111084

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010371208190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006721019744873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010519027709961

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010559558868408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002591609954834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010559558868408

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005488395690918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005488395690918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014379024505615

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059914588928223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059914588928223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069785118103027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040411949157715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059914588928223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010900497436523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083613395690918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select count(*) as cnt from patient_registration where  patient_registration_id= '377' and  office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_registration where  patient_registration_id= '377' and  office_id= '1' 
 Execution Time:0.00054001808166504

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=377  
 Execution Time:0.0030031204223633

select count(*) as cnt from patient_registration where  patient_registration_id= '377' and  office_id= '1' 
 Execution Time:0.00054001808166504

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=377  
 Execution Time:0.0030031204223633

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=377  
 Execution Time:0.00081205368041992

select count(*) as cnt from patient_registration where  patient_registration_id= '377' and  office_id= '1' 
 Execution Time:0.00054001808166504

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=377  
 Execution Time:0.0030031204223633

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=377  
 Execution Time:0.00081205368041992

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='377' and  office_id= '1' 
 Execution Time:0.0002901554107666

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073003768920898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073003768920898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026488304138184

select * from investigation where  investigation_id=29  and office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014591217041016

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00017285346984863

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.000823974609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 378 
 Execution Time:0.0003359317779541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 408 
 Execution Time:0.00029706954956055

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 408  and `patient_registration_id` = 378 
 Execution Time:0.00034785270690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043892860412598

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051593780517578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00047516822814941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 377 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 407 
 Execution Time:0.00025796890258789

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 407  and `patient_registration_id` = 377 
 Execution Time:0.00040578842163086

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 377 
 Execution Time:0.00081777572631836

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063204765319824

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00036787986755371

select * from examination where examination_id= '359' and   office_id= '1' 
 Execution Time:0.00082612037658691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 359 
 Execution Time:0.0005800724029541

select * from examination_chargesdetails where  examination_id= '359' 
 Execution Time:0.00051307678222656

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047922134399414

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0032839775085449

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_instruction_id,name,days from  medicine_instruction where category_id='2' and  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select count(*) as cnt from medicine where  name = 'Lutivit' and office_id= '1' 
 Execution Time:0.00046610832214355

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00071215629577637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 377 
 Execution Time:0.00035786628723145

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 407 
 Execution Time:0.00028514862060547

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 407  and `patient_registration_id` = 377 
 Execution Time:0.00090408325195312

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 377 
 Execution Time:0.0010969638824463

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select * from examination where examination_id= '359' and   office_id= '1' 
 Execution Time:0.0018010139465332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 359 
 Execution Time:0.00041413307189941

select * from examination_chargesdetails where  examination_id= '359' 
 Execution Time:0.00050210952758789

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070095062255859

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00070095062255859

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053501129150391

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029182434082031

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0006101131439209

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='99' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00050592422485352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0007929801940918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0007929801940918

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032520294189453

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042295455932617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025486946105957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007011890411377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 379 
 Execution Time:0.00032997131347656

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 409 
 Execution Time:0.00027298927307129

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 409  and `patient_registration_id` = 379 
 Execution Time:0.0005190372467041

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 379 
 Execution Time:0.0010299682617188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013113021850586

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077390670776367

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077390670776367

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0024518966674805

select * from examination where examination_id= '360' and   office_id= '1' 
 Execution Time:0.001107931137085

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 360 
 Execution Time:0.00056004524230957

select * from examination_chargesdetails where  examination_id= '360' 
 Execution Time:0.0007479190826416

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098299980163574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098299980163574

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004730224609375

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='67' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0014188289642334

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='34' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00061917304992676

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='24' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00063896179199219

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='99' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00072884559631348

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 378 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 408 
 Execution Time:0.00022315979003906

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 408  and `patient_registration_id` = 378 
 Execution Time:0.00018692016601562

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 378 
 Execution Time:0.00083613395690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013613700866699

select * from examination where examination_id= '361' and   office_id= '1' 
 Execution Time:0.0011649131774902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066995620727539

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 361 
 Execution Time:0.00030899047851562

select * from examination_chargesdetails where  examination_id= '361' 
 Execution Time:0.00027179718017578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048208236694336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048208236694336

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060796737670898

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016899108886719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016899108886719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012240409851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016899108886719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012240409851074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039315223693848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016899108886719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012240409851074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00041890144348145

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00017905235290527

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 378 
 Execution Time:0.00034689903259277

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 408 
 Execution Time:0.00028800964355469

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 408  and `patient_registration_id` = 378 
 Execution Time:0.00056600570678711

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 378 
 Execution Time:0.0013680458068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077700614929199

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00077700614929199

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00018906593322754

select * from examination where examination_id= '361' and   office_id= '1' 
 Execution Time:0.0011959075927734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00061488151550293

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 361 
 Execution Time:0.00082302093505859

select * from examination_chargesdetails where  examination_id= '361' 
 Execution Time:0.00059986114501953

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042915344238281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042915344238281

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00026202201843262

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010020732879639

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='80' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0019450187683105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015609264373779

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015609264373779

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010659694671631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010659694671631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00085806846618652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010659694671631

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099897384643555

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063800811767578

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00063800811767578

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00019621849060059

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012750625610352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012750625610352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026609897613525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045490264892578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025105476379395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045490264892578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077700614929199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032615661621094

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032615661621094

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001741886138916

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001741886138916

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035009384155273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010395050048828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010395050048828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010395050048828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034904479980469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012612342834473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00013017654418945

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010395050048828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034904479980469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026988983154297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085902214050293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00085902214050293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074410438537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074410438537598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060486793518066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074410438537598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050187110900879

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050187110900879

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00018692016601562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072479248046875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072479248046875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020885467529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044393539428711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085499286651611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019407272338867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044393539428711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085499286651611

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002479076385498

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001107931137085

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.001107931137085

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 380 
 Execution Time:0.0002741813659668

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 410 
 Execution Time:0.0012772083282471

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 410  and `patient_registration_id` = 380 
 Execution Time:0.00075006484985352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060892105102539

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00060892105102539

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020599365234375

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 380 
 Execution Time:0.00029993057250977

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 410 
 Execution Time:0.00021886825561523

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 410  and `patient_registration_id` = 380 
 Execution Time:0.00029110908508301

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 380 
 Execution Time:0.00080299377441406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014090538024902

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046706199645996

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00020194053649902

select * from examination where examination_id= '362' and   office_id= '1' 
 Execution Time:0.00089716911315918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 362 
 Execution Time:0.00053501129150391

select * from examination_chargesdetails where  examination_id= '362' 
 Execution Time:0.00060200691223145

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097894668579102

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00097894668579102

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042581558227539

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='45' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0009758472442627

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='20' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0007331371307373

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='16' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057005882263184

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00080299377441406

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.0003199577331543

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=44  
 Execution Time:0.0013778209686279

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.0003199577331543

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=44  
 Execution Time:0.0013778209686279

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=44  
 Execution Time:0.00060391426086426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039577484130859

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039577484130859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.00040888786315918

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=44  
 Execution Time:0.0017399787902832

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.00040888786315918

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=44  
 Execution Time:0.0017399787902832

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=44  
 Execution Time:0.00049304962158203

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.00040888786315918

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=44  
 Execution Time:0.0017399787902832

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=44  
 Execution Time:0.00049304962158203

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='44' and  office_id= '1' 
 Execution Time:0.00019192695617676

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051593780517578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031089782714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014350414276123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014350414276123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014350414276123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014350414276123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014350414276123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.00065016746520996

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.00065016746520996

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=44  
 Execution Time:0.0029640197753906

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.00065016746520996

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=44  
 Execution Time:0.0029640197753906

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=44  
 Execution Time:0.0011970996856689

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.00065016746520996

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=44  
 Execution Time:0.0029640197753906

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=44  
 Execution Time:0.0011970996856689

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='44' and  office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.0005488395690918

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.0005488395690918

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=44  
 Execution Time:0.0060980319976807

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.0005488395690918

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=44  
 Execution Time:0.0060980319976807

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=44  
 Execution Time:0.0034899711608887

select count(*) as cnt from patient_registration where  patient_registration_id= '44' and  office_id= '1' 
 Execution Time:0.0005488395690918

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
		where billing=0  and  patient_registration.office_id= 1    and patient_registration.patient_registration_id=44  
 Execution Time:0.0060980319976807

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,billing_date,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where   billing_master.office_id= 1    and billing_master.patient_registration_id=44  
 Execution Time:0.0034899711608887

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='44' and  office_id= '1' 
 Execution Time:0.030205011367798

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038695335388184

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038695335388184

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00030899047851562

select * from opdcharge where  opdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018215179443359

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010318756103516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010318756103516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.0019140243530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010318756103516

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005958080291748

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 383 
 Execution Time:0.00075793266296387

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 413 
 Execution Time:0.0003199577331543

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 413  and `patient_registration_id` = 383 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00091099739074707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00091099739074707

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00047707557678223

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 383 
 Execution Time:0.00055098533630371

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 413 
 Execution Time:0.0003819465637207

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 413  and `patient_registration_id` = 383 
 Execution Time:0.0002899169921875

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 383 
 Execution Time:0.0014801025390625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068092346191406

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068092346191406

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00023913383483887

select * from examination where examination_id= '363' and   office_id= '1' 
 Execution Time:0.0010089874267578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 363 
 Execution Time:0.000579833984375

select * from examination_chargesdetails where  examination_id= '363' 
 Execution Time:0.00048184394836426

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088882446289062

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088882446289062

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048398971557617

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='39' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00077700614929199

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='41' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.002345085144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015318393707275

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015318393707275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015318393707275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015318393707275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012738704681396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015318393707275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012738704681396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012669563293457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013260841369629

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015318393707275

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013129711151123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012738704681396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084400177001953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00098896026611328

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002892017364502

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.002892017364502

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014619827270508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012788772583008

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014619827270508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012788772583008

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select medicine_templates_id,name from  medicine_templates where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014619827270508

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0012788772583008

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 375 
 Execution Time:0.00050997734069824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 404 
 Execution Time:0.00032281875610352

SELECT *
FROM `whitecell`
WHERE `patient_appointment_id` = 404  and `patient_registration_id` = 375 
 Execution Time:0.0011060237884521

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 375 
 Execution Time:0.0011589527130127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014209747314453

select * from examination where examination_id= '356' and   office_id= '1' 
 Execution Time:0.0015358924865723

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 356 
 Execution Time:0.0024118423461914

select * from examination_chargesdetails where  examination_id= '356' 
 Execution Time:0.0011999607086182

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034809112548828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034809112548828

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054287910461426

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026729106903076

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026729106903076

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00054478645324707

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='27' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0026938915252686

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='38' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00070309638977051

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='82' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0009310245513916

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='76' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0005800724029541


select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059349536895752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059349536895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059349536895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059349536895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049471855163574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059349536895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049471855163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028388500213623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059349536895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049471855163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028388500213623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020101070404053

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059349536895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049471855163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028388500213623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020101070404053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049200057983398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059349536895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049471855163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028388500213623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020101070404053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049200057983398

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033481121063232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059349536895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049471855163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028388500213623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020101070404053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049200057983398

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033481121063232

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0059349536895752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0044090747833252

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0028660297393799

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0049471855163574

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028388500213623

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020101070404053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049200057983398

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033481121063232

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010020732879639

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.002169132232666

select count(*) as cnt from patient_registration where  patient_registration_id= '149' and  office_id= '1' 
 Execution Time:0.00065207481384277

select count(*) as cnt from patient_registration where  patient_registration_id= '149' and  office_id= '1' 
 Execution Time:0.00065207481384277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='149' and  doctors_registration.office_id= '1' 
 Execution Time:0.00087499618530273

select count(*) as cnt from patient_registration where  patient_registration_id= '149' and  office_id= '1' 
 Execution Time:0.00065207481384277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='149' and  doctors_registration.office_id= '1' 
 Execution Time:0.00087499618530273

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='149' and  office_id= '1' 
 Execution Time:0.00018596649169922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069308280944824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069308280944824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00019097328186035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024800300598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024800300598145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024008750915527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027639865875244

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024800300598145

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024008750915527

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 149 
 Execution Time:0.00037813186645508

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 160 
 Execution Time:0.00028085708618164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 149 
 Execution Time:0.00046801567077637

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 160 
 Execution Time:0.00054216384887695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026969909667969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088405609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088405609130859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088405609130859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088405609130859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024828910827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088405609130859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024828910827637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013439655303955

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013961791992188

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0011050701141357

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088405609130859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097107887268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024828910827637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083494186401367

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052809715270996

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010590553283691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010590553283691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099897384643555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099897384643555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022780895233154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099897384643555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022780895233154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099897384643555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022780895233154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074505805969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099897384643555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022780895233154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074505805969238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013508796691895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00099897384643555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022780895233154

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074505805969238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013508796691895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068807601928711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00068807601928711

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008699893951416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008699893951416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078415870666504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046300888061523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008699893951416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00064182281494141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065493583679199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00065493583679199

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0024781227111816

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010240077972412

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010240077972412

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012614011764526

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012614011764526

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012614011764526

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012614011764526

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012614011764526

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012614011764526

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013720989227295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012614011764526

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013720989227295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012614011764526

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013720989227295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031228065490723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012614011764526

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013720989227295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031228065490723

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043978691101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.012614011764526

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041317939758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0013720989227295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031228065490723

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043978691101074

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.02292013168335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019228458404541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019228458404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019228458404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019228458404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019228458404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019228458404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019228458404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019228458404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00111985206604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019228458404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00111985206604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019228458404541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037789344787598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00111985206604

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00069403648376465

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00069403648376465

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00026297569274902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050380229949951

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050380229949951

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027399063110352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050380229949951

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033900737762451

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0027399063110352

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 152 
 Execution Time:0.00041389465332031

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 162 
 Execution Time:0.0006868839263916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0030419826507568

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005497932434082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005497932434082

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043139457702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043139457702637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043139457702637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043139457702637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043139457702637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043139457702637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043139457702637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085616111755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043139457702637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085616111755371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029890537261963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043139457702637

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005190372467041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085616111755371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 152 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 162 
 Execution Time:0.00039911270141602

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 152 
 Execution Time:0.00068902969360352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select * from examination where examination_id= '133' and   office_id= '1' 
 Execution Time:0.00084996223449707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 133 
 Execution Time:0.002194881439209

select * from examination_chargesdetails where  examination_id= '133' 
 Execution Time:0.0016660690307617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002324104309082

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.002324104309082

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00024509429931641

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0031421184539795

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='77' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00077199935913086

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00089788436889648

SELECT *
FROM `examination`
WHERE `examination_id` = 133 
 Execution Time:0.00086688995361328

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00029087066650391

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00061607360839844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 152 
 Execution Time:0.00026988983154297

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00054502487182617

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=133 
 Execution Time:0.00066709518432617

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=133 
 Execution Time:0.0005800724029541

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=133 
 Execution Time:0.00067996978759766

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=133 
 Execution Time:0.00029492378234863

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='133' and office_id='1' 
 Execution Time:0.00055408477783203

select * from examination_chargesdetails where  examination_id= '133' 
 Execution Time:0.00021100044250488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024030208587646

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024030208587646

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 152 
 Execution Time:0.0012350082397461

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 162 
 Execution Time:0.00043702125549316

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 152 
 Execution Time:0.0040948390960693

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012640953063965

select * from examination where examination_id= '133' and   office_id= '1' 
 Execution Time:0.0085718631744385

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0079021453857422

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 133 
 Execution Time:0.0025529861450195

select * from examination_chargesdetails where  examination_id= '133' 
 Execution Time:0.0062870979309082

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00076007843017578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058293342590332

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058293342590332

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034809112548828

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00036787986755371

SELECT *
FROM `examination`
WHERE `examination_id` = 133 
 Execution Time:0.00047612190246582

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00016212463378906

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00013399124145508

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 152 
 Execution Time:0.00018692016601562

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.0001671314239502

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=133 
 Execution Time:0.00043392181396484

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=133 
 Execution Time:0.00027799606323242

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=133 
 Execution Time:0.0001828670501709

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=133 
 Execution Time:0.00044107437133789

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='133' and office_id='1' 
 Execution Time:0.00036811828613281

select * from examination_chargesdetails where  examination_id= '133' 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000762939453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000762939453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023500919342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000762939453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023500919342041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00097489356994629

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.0004880428314209

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 164 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.00039005279541016

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 164 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00061202049255371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005800724029541

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.00051593780517578

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 164 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.00026917457580566

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 164 
 Execution Time:0.0001680850982666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00072479248046875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.00040507316589355

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 164 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00069212913513184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.00066995620727539

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 164 
 Execution Time:0.00059318542480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.00026202201843262

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 164 
 Execution Time:0.00017595291137695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069880485534668

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031280517578125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 164 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00073885917663574

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 151 
 Execution Time:0.00030899047851562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 161 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 151 
 Execution Time:0.00039792060852051

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 161 
 Execution Time:0.00026607513427734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0094320774078369

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0085999965667725

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0094320774078369

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0085999965667725

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0094320774078369

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0085999965667725

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 152 
 Execution Time:0.0027129650115967

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 162 
 Execution Time:0.0028901100158691

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 152 
 Execution Time:0.0012459754943848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select * from examination where examination_id= '133' and   office_id= '1' 
 Execution Time:0.0012919902801514

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 133 
 Execution Time:0.0008549690246582

select * from examination_chargesdetails where  examination_id= '133' 
 Execution Time:0.0005640983581543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038940906524658

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038940906524658

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065088272094727

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.0004889965057373

SELECT *
FROM `examination`
WHERE `examination_id` = 133 
 Execution Time:0.0010759830474854

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00029110908508301

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00026583671569824

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 152 
 Execution Time:0.00029706954956055

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 2 
 Execution Time:0.00063800811767578

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=133 
 Execution Time:0.0010850429534912

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=133 
 Execution Time:0.00061607360839844

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=133 
 Execution Time:0.00036501884460449

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=133 
 Execution Time:0.00057697296142578

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='133' and office_id='1' 
 Execution Time:0.00098896026611328

select * from examination_chargesdetails where  examination_id= '133' 
 Execution Time:0.00038719177246094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 152 
 Execution Time:0.00028514862060547

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 162 
 Execution Time:0.00026321411132812

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 152 
 Execution Time:0.00057697296142578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00011801719665527

select * from examination where examination_id= '133' and   office_id= '1' 
 Execution Time:0.00097393989562988

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 133 
 Execution Time:0.00051593780517578

select * from examination_chargesdetails where  examination_id= '133' 
 Execution Time:0.00042104721069336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005650520324707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005650520324707

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010108947753906

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.0003359317779541

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 164 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058484077453613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.00036120414733887

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 164 
 Execution Time:0.00027108192443848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00053715705871582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 151 
 Execution Time:0.0003349781036377

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 161 
 Execution Time:0.00022292137145996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.001230001449585

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059390068054199

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059390068054199

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025796890258789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 153 
 Execution Time:0.00037407875061035

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 163 
 Execution Time:0.00023007392883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046181678771973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049877166748047

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 153 
 Execution Time:0.00024509429931641

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 163 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013899803161621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052285194396973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052285194396973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052285194396973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091004371643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052285194396973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091004371643066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052285194396973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091004371643066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063204765319824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00040984153747559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063204765319824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00081992149353027

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00077414512634277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 155 
 Execution Time:0.00075888633728027

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 165 
 Execution Time:0.00071406364440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00075602531433105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089519023895264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089519023895264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0090370178222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089519023895264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0090370178222656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010437965393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089519023895264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0090370178222656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010437965393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089519023895264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0090370178222656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010437965393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010230541229248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089519023895264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0090370178222656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010437965393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010230541229248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089519023895264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0090370178222656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010437965393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010230541229248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089519023895264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0090370178222656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010437965393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010230541229248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00142502784729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089519023895264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0090370178222656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010437965393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010230541229248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00142502784729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0089519023895264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0090370178222656

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010437965393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091910362243652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010230541229248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095510482788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00142502784729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001021146774292

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00052595138549805

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00017094612121582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068402290344238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068402290344238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003183126449585

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003183126449585

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003183126449585

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038199424743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003183126449585

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038199424743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037422180175781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003183126449585

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038199424743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037422180175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038490295410156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003183126449585

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038199424743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037422180175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038490295410156

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003183126449585

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038199424743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037422180175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038490295410156

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003183126449585

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038199424743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037422180175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038490295410156

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038180351257324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003183126449585

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038199424743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037422180175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038490295410156

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038180351257324

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003183126449585

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0038199424743652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037422180175781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038490295410156

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038180351257324

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003605842590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005040168762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009758472442627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009758472442627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009758472442627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009758472442627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002241849899292

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009758472442627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002241849899292

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020990371704102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009758472442627

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002241849899292

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012350082397461

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00047802925109863

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00016093254089355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064802169799805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064802169799805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049686431884766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049686431884766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060296058654785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060296058654785

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090384483337402

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090384483337402

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012540817260742

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014569759368896

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010030269622803

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0012540817260742

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.00040102005004883

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 167 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 157 
 Execution Time:0.00037002563476562

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 167 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0018229484558105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 158 
 Execution Time:0.00041294097900391

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 168 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063705444335938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 158 
 Execution Time:0.00041794776916504

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 168 
 Execution Time:0.00046586990356445

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 158 
 Execution Time:0.00089693069458008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043582916259766

select * from examination where examination_id= '139' and   office_id= '1' 
 Execution Time:0.0011260509490967

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 139 
 Execution Time:0.0017950534820557

select * from examination_chargesdetails where  examination_id= '139' 
 Execution Time:0.0011320114135742

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017039775848389

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017039775848389

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028581619262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028581619262695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013480186462402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054097175598145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028581619262695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013480186462402

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011789798736572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011789798736572

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019500255584717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011789798736572

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019500255584717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011789798736572

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019500255584717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013039112091064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011789798736572

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019500255584717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013039112091064

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014019012451172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017220973968506

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00093984603881836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00091409683227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011789798736572

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019500255584717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013039112091064

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029129981994629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001121997833252

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001121997833252

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021970272064209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.001121997833252

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.00066280364990234

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 164 
 Execution Time:0.00029897689819336

select  examination_id,DATE_FORMAT(examination_date,'%d/%m/%Y') AS examination_date,doctors_registration.name from  examination inner join doctors_registration on examination.doctor_id=doctors_registration.doctors_registration_id where  examination.patient_registration_id= 154 
 Execution Time:0.00081586837768555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select * from examination where examination_id= '134' and   office_id= '1' 
 Execution Time:0.00084018707275391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044918060302734

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 134 
 Execution Time:0.0011088848114014

select * from examination_chargesdetails where  examination_id= '134' 
 Execution Time:0.0029079914093018

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022139549255371

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022139549255371

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011138916015625

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0015709400177002

SELECT *
FROM `examination`
WHERE `examination_id` = 134 
 Execution Time:0.00089883804321289

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 1 
 Execution Time:0.00047111511230469

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.0010139942169189

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 154 
 Execution Time:0.00042009353637695

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 5 
 Execution Time:0.0002601146697998

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=134 
 Execution Time:0.0009148120880127

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=134 
 Execution Time:0.00070500373840332

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=134 
 Execution Time:0.00040078163146973

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=134 
 Execution Time:0.00065898895263672

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='134' and office_id='1' 
 Execution Time:0.0007319450378418

select * from examination_chargesdetails where  examination_id= '134' 
 Execution Time:0.00039410591125488

select * from medicine_category where  office_id= '1' and status=1 
 Execution Time:0.0027720928192139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022518634796143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022518634796143

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022518634796143

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022518634796143

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018329620361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022518634796143

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018329620361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018398761749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022518634796143

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018329620361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018398761749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022518634796143

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018329620361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018398761749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020179748535156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022518634796143

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018329620361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018398761749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020179748535156

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028319358825684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022518634796143

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0018150806427002

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018329620361328

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018398761749268

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020179748535156

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017399787902832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011718273162842

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011718273162842

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0075399875640869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011718273162842

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0075399875640869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011718273162842

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0075399875640869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011718273162842

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0075399875640869

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select doctors_registration_id,name from doctors_registration where designation=2 and   office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from doctors_registration where designation=3 and   office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019781589508057

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734


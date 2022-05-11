select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014063835144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014063835144043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014063835144043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014063835144043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033371448516846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014063835144043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033371448516846

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030109882354736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014063835144043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033371448516846

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030109882354736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014063835144043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033371448516846

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030109882354736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014063835144043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037260055541992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021729469299316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033371448516846

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030109882354736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031590461730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045859813690186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003425121307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043520927429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043520927429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043520927429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043520927429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020589828491211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043520927429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020589828491211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043520927429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020589828491211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043520927429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020589828491211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021917819976807

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043520927429199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015790462493896

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020589828491211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018339157104492

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038318634033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021917819976807

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057899951934814

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.0016460418701172

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.0016460418701172

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2446' and  doctors_registration.office_id= '1' 
 Execution Time:0.0075128078460693

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.0016460418701172

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2446' and  doctors_registration.office_id= '1' 
 Execution Time:0.0075128078460693

select fname,lname,mrdno from patient_registration where  patient_registration_id='2446' and  office_id= '1' 
 Execution Time:0.0021519660949707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015227794647217

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015227794647217

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0023558139801025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036978721618652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019693374633789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036978721618652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075719356536865

select count(*) as cnt from patient_registration where  patient_registration_id= '2468' and  office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from patient_registration where  patient_registration_id= '2468' and  office_id= '1' 
 Execution Time:0.00036001205444336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025310516357422

select count(*) as cnt from patient_registration where  patient_registration_id= '2468' and  office_id= '1' 
 Execution Time:0.00036001205444336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025310516357422

select fname,lname,mrdno from patient_registration where  patient_registration_id='2468' and  office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046086311340332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077199935913086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015130043029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077199935913086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015130043029785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077199935913086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015130043029785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077199935913086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015130043029785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037529468536377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0042181015014648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077199935913086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015130043029785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0040819644927979

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038180351257324

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037529468536377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046789646148682

select count(*) as cnt from patient_registration where  patient_registration_id= '203' and  office_id= '1' 
 Execution Time:0.0032651424407959

select count(*) as cnt from patient_registration where  patient_registration_id= '203' and  office_id= '1' 
 Execution Time:0.0032651424407959

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='203' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040740966796875

select count(*) as cnt from patient_registration where  patient_registration_id= '203' and  office_id= '1' 
 Execution Time:0.0032651424407959

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='203' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040740966796875

select fname,lname,mrdno from patient_registration where  patient_registration_id='203' and  office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011720657348633

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011720657348633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0018229484558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013358592987061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013358592987061

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002918004989624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034160614013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038859844207764

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013358592987061

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002918004989624

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094480514526367

select count(*) as cnt from patient_registration where  patient_registration_id= '2299' and  office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_registration where  patient_registration_id= '2299' and  office_id= '1' 
 Execution Time:0.00041604042053223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2299' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044980049133301

select count(*) as cnt from patient_registration where  patient_registration_id= '2299' and  office_id= '1' 
 Execution Time:0.00041604042053223

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2299' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044980049133301

select fname,lname,mrdno from patient_registration where  patient_registration_id='2299' and  office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047802925109863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021941661834717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021941661834717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021941661834717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021941661834717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021941661834717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021941661834717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037839412689209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021941661834717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037839412689209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003760814666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021941661834717

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039639472961426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038020610809326

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038049221038818

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037839412689209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003760814666748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051050186157227

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.0040819644927979

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.0040819644927979

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2284' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044240951538086

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.0040819644927979

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2284' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044240951538086

select fname,lname,mrdno from patient_registration where  patient_registration_id='2284' and  office_id= '1' 
 Execution Time:0.0041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062680244445801

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062680244445801

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026106834411621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035715103149414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058801174163818

select count(*) as cnt from patient_registration where  patient_registration_id= '1604' and  office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_registration where  patient_registration_id= '1604' and  office_id= '1' 
 Execution Time:0.00047898292541504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1604' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042531490325928

select count(*) as cnt from patient_registration where  patient_registration_id= '1604' and  office_id= '1' 
 Execution Time:0.00047898292541504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1604' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042531490325928

select fname,lname,mrdno from patient_registration where  patient_registration_id='1604' and  office_id= '1' 
 Execution Time:0.0010750293731689

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056099891662598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073385238647461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035405158996582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073385238647461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057978630065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031805038452148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079107284545898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057120323181152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006101131439209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006101131439209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006101131439209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089502334594727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029840469360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006101131439209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089502334594727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057270526885986

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032687187194824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017521381378174

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017521381378174

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090384483337402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090384483337402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090384483337402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090384483337402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007631778717041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00090384483337402

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046801567077637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049941539764404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001981258392334

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014996528625488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00024795532226562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033950805664062

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00082778930664062

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00082778930664062

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046014785766602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060915946960449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060915946960449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001244068145752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004025936126709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004025936126709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002086877822876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004025936126709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002086877822876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004025936126709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002086877822876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009770393371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018520355224609

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004025936126709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002086877822876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009770393371582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0106041431427

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095701217651367

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095701217651367

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027179718017578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014009475708008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014009475708008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0044479370117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014009475708008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0044479370117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014009475708008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0044479370117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011420249938965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078988075256348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013041496276855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00092887878417969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014009475708008

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0044479370117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011420249938965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060989856719971

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007169246673584

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007169246673584

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065493583679199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072288513183594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072288513183594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004267692565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033731460571289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033731460571289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033731460571289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033731460571289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033459663391113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033731460571289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033459663391113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021347999572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033731460571289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033459663391113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021347999572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034668445587158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033731460571289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033459663391113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021347999572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034668445587158

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026030540466309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033731460571289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039181709289551

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022380352020264

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033459663391113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021347999572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034668445587158

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026030540466309

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005756139755249

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051498413085938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063300132751465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059413909912109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081014633178711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046682357788086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059413909912109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045440196990967

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032615661621094

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032615661621094

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0071618556976318

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0071618556976318

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.004694938659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019750595092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019750595092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016679763793945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019750595092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016679763793945

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018978118896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019750595092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016679763793945

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018978118896484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019750595092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016679763793945

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018978118896484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019750595092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016679763793945

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018978118896484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027320384979248

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028800964355469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007896900177002

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053906440734863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053906440734863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053906440734863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076913833618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064921379089355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053906440734863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076913833618164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073919296264648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0068728923797607

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0068728923797607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00086212158203125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0068728923797607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0052719116210938

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.00047898292541504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2446' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040998458862305

select count(*) as cnt from patient_registration where  patient_registration_id= '2446' and  office_id= '1' 
 Execution Time:0.00047898292541504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2446' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040998458862305

select fname,lname,mrdno from patient_registration where  patient_registration_id='2446' and  office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027620792388916

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0027620792388916

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.0005180835723877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081360340118408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081360340118408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081360340118408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036828517913818

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081360340118408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036828517913818

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081360340118408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036828517913818

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038981437683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030779838562012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018119812011719

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038981437683105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029230117797852

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022602081298828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052785873413086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052785873413086

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060820579528809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00083684921264648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048398971557617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00520920753479

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00760817527771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00760817527771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0053408145904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00760817527771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0053408145904541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016410350799561

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00760817527771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0053408145904541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016410350799561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00760817527771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0053408145904541

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016410350799561

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0041129589080811

select count(*) as cnt from patient_registration where  patient_registration_id= '2468' and  office_id= '1' 
 Execution Time:0.0031979084014893

select count(*) as cnt from patient_registration where  patient_registration_id= '2468' and  office_id= '1' 
 Execution Time:0.0031979084014893

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048351287841797

select count(*) as cnt from patient_registration where  patient_registration_id= '2468' and  office_id= '1' 
 Execution Time:0.0031979084014893

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048351287841797

select fname,lname,mrdno from patient_registration where  patient_registration_id='2468' and  office_id= '1' 
 Execution Time:0.0037620067596436

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044600963592529

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0044600963592529

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0032079219818115

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067520141601562

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00067520141601562

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00099897384643555

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.00049495697021484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064640045166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061392784118652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018320083618164

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00140380859375

select count(*) as cnt from patient_registration where  patient_registration_id= '2042' and  office_id= '1' 
 Execution Time:0.00039982795715332

select count(*) as cnt from patient_registration where  patient_registration_id= '2042' and  office_id= '1' 
 Execution Time:0.00039982795715332

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2042' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040359497070312

select count(*) as cnt from patient_registration where  patient_registration_id= '2042' and  office_id= '1' 
 Execution Time:0.00039982795715332

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2042' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040359497070312

select fname,lname,mrdno from patient_registration where  patient_registration_id='2042' and  office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_registration where  patient_registration_id= '202' and  office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from patient_registration where  patient_registration_id= '202' and  office_id= '1' 
 Execution Time:0.00030303001403809

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='202' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024259090423584

select count(*) as cnt from patient_registration where  patient_registration_id= '202' and  office_id= '1' 
 Execution Time:0.00030303001403809

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='202' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024259090423584

select fname,lname,mrdno from patient_registration where  patient_registration_id='202' and  office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from patient_registration where  patient_registration_id= '203' and  office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from patient_registration where  patient_registration_id= '203' and  office_id= '1' 
 Execution Time:0.00030398368835449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='203' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031359195709229

select count(*) as cnt from patient_registration where  patient_registration_id= '203' and  office_id= '1' 
 Execution Time:0.00030398368835449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='203' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031359195709229

select fname,lname,mrdno from patient_registration where  patient_registration_id='203' and  office_id= '1' 
 Execution Time:0.00023889541625977

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058889389038086

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00058889389038086

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043606758117676

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00058412551879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097689628601074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097689628601074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097689628601074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097689628601074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097689628601074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036978721618652

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038070678710938

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018939971923828

select count(*) as cnt from patient_registration where  patient_registration_id= '2299' and  office_id= '1' 
 Execution Time:0.00045394897460938

select count(*) as cnt from patient_registration where  patient_registration_id= '2299' and  office_id= '1' 
 Execution Time:0.00045394897460938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2299' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024688243865967

select count(*) as cnt from patient_registration where  patient_registration_id= '2299' and  office_id= '1' 
 Execution Time:0.00045394897460938

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2299' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024688243865967

select fname,lname,mrdno from patient_registration where  patient_registration_id='2299' and  office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039196014404297

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00051712989807129

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.0010459423065186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082798004150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082798004150391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082798004150391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082798004150391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082798004150391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001431941986084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.003004789352417

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.003004789352417

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2284' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028579235076904

select count(*) as cnt from patient_registration where  patient_registration_id= '2284' and  office_id= '1' 
 Execution Time:0.003004789352417

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2284' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028579235076904

select fname,lname,mrdno from patient_registration where  patient_registration_id='2284' and  office_id= '1' 
 Execution Time:0.0027458667755127

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049185752868652

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044989585876465

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.00074911117553711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058538913726807

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058538913726807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058538913726807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058538913726807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058538913726807

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020384788513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020384788513184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020384788513184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020384788513184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046086311340332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020384788513184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040698051452637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029242038726807

select count(*) as cnt from patient_registration where  patient_registration_id= '2204' and  office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_registration where  patient_registration_id= '2204' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025849342346191

select count(*) as cnt from patient_registration where  patient_registration_id= '2204' and  office_id= '1' 
 Execution Time:0.00045299530029297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025849342346191

select fname,lname,mrdno from patient_registration where  patient_registration_id='2204' and  office_id= '1' 
 Execution Time:0.00025606155395508

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0018019676208496

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0018019676208496

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0042390823364258

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0042390823364258

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0029878616333008

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039811134338379

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039811134338379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039811134338379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088691711425781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039811134338379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088691711425781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039811134338379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088691711425781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039811134338379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088691711425781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097799301147461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039811134338379

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00088691711425781

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097799301147461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050370693206787

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053870677947998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053870677947998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053870677947998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053870677947998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053870677947998

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select count(*) as cnt from patient_registration where  patient_registration_id= '2567' and  office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from patient_registration where  patient_registration_id= '2567' and  office_id= '1' 
 Execution Time:0.00050997734069824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2567' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025560855865479

select count(*) as cnt from patient_registration where  patient_registration_id= '2567' and  office_id= '1' 
 Execution Time:0.00050997734069824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2567' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025560855865479

select fname,lname,mrdno from patient_registration where  patient_registration_id='2567' and  office_id= '1' 
 Execution Time:0.00024509429931641

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098991394042969

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00098991394042969

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046992301940918

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00075101852416992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010164976119995

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010164976119995

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010164976119995

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010164976119995

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010164976119995

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018861293792725

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018861293792725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002810001373291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018861293792725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002810001373291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037457942962646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018861293792725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002810001373291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037457942962646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018861293792725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002810001373291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037457942962646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034589767456055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037121772766113

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018861293792725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002810001373291

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037457942962646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030980110168457

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034589767456055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069212913513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074195861816406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069212913513184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058200359344482

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083088874816895

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00083088874816895

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019850730895996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019850730895996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032169818878174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037248134613037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037248134613037

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037248134613037

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037248134613037

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038509368896484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036358833312988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036869049072266

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037248134613037

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037620067596436

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038509368896484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008681058883667

select count(*) as cnt from patient_registration where  patient_registration_id= '2302' and  office_id= '1' 
 Execution Time:0.00036120414733887

select count(*) as cnt from patient_registration where  patient_registration_id= '2302' and  office_id= '1' 
 Execution Time:0.00036120414733887

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2302' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034029483795166

select count(*) as cnt from patient_registration where  patient_registration_id= '2302' and  office_id= '1' 
 Execution Time:0.00036120414733887

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2302' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034029483795166

select fname,lname,mrdno from patient_registration where  patient_registration_id='2302' and  office_id= '1' 
 Execution Time:0.0037012100219727

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0034730434417725

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0034730434417725

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0033848285675049

select count(*) as cnt from patient_registration where  patient_registration_id= '2039' and  office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from patient_registration where  patient_registration_id= '2039' and  office_id= '1' 
 Execution Time:0.0003509521484375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2039' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036351680755615

select count(*) as cnt from patient_registration where  patient_registration_id= '2039' and  office_id= '1' 
 Execution Time:0.0003509521484375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2039' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036351680755615

select fname,lname,mrdno from patient_registration where  patient_registration_id='2039' and  office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015950202941895

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0015950202941895

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038003921508789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013599872589111

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013599872589111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042331218719482

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013599872589111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042331218719482

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013599872589111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042331218719482

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0078389644622803

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013599872589111

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042331218719482

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036959648132324

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0078389644622803

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067782402038574

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00092291831970215

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086402893066406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016810894012451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055694580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045208930969238

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067901611328125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00067901611328125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021960735321045

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060200691223145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060200691223145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012218952178955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00078177452087402

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00063300132751465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00088882446289062

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012218952178955

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070388317108154

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058619976043701

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058619976043701

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058619976043701

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058619976043701

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058619976043701

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select count(*) as cnt from patient_registration where  patient_registration_id= '2302' and  office_id= '1' 
 Execution Time:0.00096797943115234

select count(*) as cnt from patient_registration where  patient_registration_id= '2302' and  office_id= '1' 
 Execution Time:0.00096797943115234

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2302' and  doctors_registration.office_id= '1' 
 Execution Time:0.006317138671875

select count(*) as cnt from patient_registration where  patient_registration_id= '2302' and  office_id= '1' 
 Execution Time:0.00096797943115234

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2302' and  doctors_registration.office_id= '1' 
 Execution Time:0.006317138671875

select fname,lname,mrdno from patient_registration where  patient_registration_id='2302' and  office_id= '1' 
 Execution Time:0.00066518783569336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082898139953613

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00082898139953613

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0037028789520264

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.0023961067199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083949565887451

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083949565887451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083949565887451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083949565887451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0083949565887451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066184997558594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033431053161621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033431053161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033431053161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033431053161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033309459686279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033431053161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033309459686279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033431053161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033309459686279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035099983215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033431053161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033309459686279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035099983215332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020990371704102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033431053161621

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002007007598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011451244354248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033309459686279

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035099983215332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020990371704102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070879459381104

select count(*) as cnt from patient_registration where  patient_registration_id= '1911' and  office_id= '1' 
 Execution Time:0.00056791305541992

select count(*) as cnt from patient_registration where  patient_registration_id= '1911' and  office_id= '1' 
 Execution Time:0.00056791305541992

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1911' and  doctors_registration.office_id= '1' 
 Execution Time:0.007194995880127

select count(*) as cnt from patient_registration where  patient_registration_id= '1911' and  office_id= '1' 
 Execution Time:0.00056791305541992

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1911' and  doctors_registration.office_id= '1' 
 Execution Time:0.007194995880127

select fname,lname,mrdno from patient_registration where  patient_registration_id='1911' and  office_id= '1' 
 Execution Time:0.0015919208526611

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00076699256896973

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00076699256896973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0055661201477051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0055661201477051

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0045411586761475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047180652618408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047180652618408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047180652618408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047180652618408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047180652618408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047180652618408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084304809570312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0047180652618408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013468265533447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084304809570312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061519145965576

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0028631687164307

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0028631687164307

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010290145874023

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043511390686035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043511390686035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012948513031006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012948513031006

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012948513031006

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012948513031006

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026791095733643

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012948513031006

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005997896194458

select count(*) as cnt from patient_registration where  patient_registration_id= '1755' and  office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from patient_registration where  patient_registration_id= '1755' and  office_id= '1' 
 Execution Time:0.00046300888061523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1755' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050561428070068

select count(*) as cnt from patient_registration where  patient_registration_id= '1755' and  office_id= '1' 
 Execution Time:0.00046300888061523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1755' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050561428070068

select fname,lname,mrdno from patient_registration where  patient_registration_id='1755' and  office_id= '1' 
 Execution Time:0.0015740394592285

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072908401489258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072908401489258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_registration where  patient_registration_id= '2419' and  office_id= '1' 
 Execution Time:0.00064611434936523

select count(*) as cnt from patient_registration where  patient_registration_id= '2419' and  office_id= '1' 
 Execution Time:0.00064611434936523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2419' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042688846588135

select count(*) as cnt from patient_registration where  patient_registration_id= '2419' and  office_id= '1' 
 Execution Time:0.00064611434936523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2419' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042688846588135

select fname,lname,mrdno from patient_registration where  patient_registration_id='2419' and  office_id= '1' 
 Execution Time:0.0024209022521973

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00095605850219727

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00095605850219727

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00095987319946289

select count(*) as cnt from patient_registration where  patient_registration_id= '2146' and  office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from patient_registration where  patient_registration_id= '2146' and  office_id= '1' 
 Execution Time:0.00054502487182617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2146' and  doctors_registration.office_id= '1' 
 Execution Time:0.0061109066009521

select count(*) as cnt from patient_registration where  patient_registration_id= '2146' and  office_id= '1' 
 Execution Time:0.00054502487182617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2146' and  doctors_registration.office_id= '1' 
 Execution Time:0.0061109066009521

select fname,lname,mrdno from patient_registration where  patient_registration_id='2146' and  office_id= '1' 
 Execution Time:0.0038561820983887

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059103965759277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059103965759277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035300254821777

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035300254821777

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070309638977051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054192543029785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054192543029785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061297416687012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061297416687012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061297416687012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076889991760254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061297416687012

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076889991760254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048558712005615

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014219284057617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010550022125244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003896951675415

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003896951675415

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0080990791320801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003896951675415

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0080990791320801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0095851421356201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003896951675415

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0080990791320801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0095851421356201

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000885009765625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033919811248779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003896951675415

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0080990791320801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0095851421356201

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000885009765625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050060749053955

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072002410888672

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072002410888672

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040006637573242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019278526306152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019278526306152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022099018096924

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019278526306152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022099018096924

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019278526306152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022099018096924

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016639232635498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019278526306152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022099018096924

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016639232635498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096297264099121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094699859619141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019278526306152

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022099018096924

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012869834899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016639232635498

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096297264099121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077149868011475

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00080704689025879

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00080704689025879

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0055420398712158

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010559558868408

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010559558868408

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027298927307129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051188468933105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034060478210449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021300315856934

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021300315856934

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045418739318848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045418739318848

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017688274383545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017688274383545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017688274383545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011069774627686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017688274383545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011069774627686

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017688274383545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011069774627686

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017688274383545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011069774627686

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088191032409668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017688274383545

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011069774627686

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092911720275879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00088191032409668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051040649414062

select count(*) as cnt from patient_registration where  patient_registration_id= '587' and  office_id= '1' 
 Execution Time:0.0038800239562988

select count(*) as cnt from patient_registration where  patient_registration_id= '587' and  office_id= '1' 
 Execution Time:0.0038800239562988

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='587' and  doctors_registration.office_id= '1' 
 Execution Time:0.006850004196167

select count(*) as cnt from patient_registration where  patient_registration_id= '587' and  office_id= '1' 
 Execution Time:0.0038800239562988

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='587' and  doctors_registration.office_id= '1' 
 Execution Time:0.006850004196167

select fname,lname,mrdno from patient_registration where  patient_registration_id='587' and  office_id= '1' 
 Execution Time:0.0007779598236084

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0023009777069092

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0023009777069092

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0018889904022217

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007169246673584

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007169246673584

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062108039855957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062108039855957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062108039855957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062108039855957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007319450378418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093941688537598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066590309143066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037693977355957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005190372467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.014506101608276

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063705444335938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063705444335938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097894668579102

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00097894668579102

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064949989318848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064949989318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064949989318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064949989318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012228488922119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064949989318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012228488922119

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064949989318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012228488922119

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064949989318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012228488922119

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031449794769287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064949989318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012228488922119

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025780200958252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024189949035645

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0031449794769287

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047168731689453

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077104568481445

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00077104568481445

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011560916900635

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011560916900635

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056004524230957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047299861907959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047299861907959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047299861907959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047299861907959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030689239501953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047299861907959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030689239501953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071029663085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047299861907959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030689239501953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071029663085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014581680297852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047299861907959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030689239501953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071029663085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014581680297852

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041282176971436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047299861907959

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012021064758301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030689239501953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071029663085938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014581680297852

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041282176971436

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009026050567627

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022189617156982

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0022189617156982

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035769939422607

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044488906860352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044488906860352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003587007522583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003587007522583

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003587007522583

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017950534820557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003587007522583

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017950534820557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003587007522583

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017950534820557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003587007522583

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017950534820557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094795227050781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003587007522583

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068116188049316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017950534820557

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094795227050781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053780078887939

select count(*) as cnt from patient_registration where  patient_registration_id= '1183' and  office_id= '1' 
 Execution Time:0.002640962600708

select count(*) as cnt from patient_registration where  patient_registration_id= '1183' and  office_id= '1' 
 Execution Time:0.002640962600708

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1183' and  doctors_registration.office_id= '1' 
 Execution Time:0.01029896736145

select count(*) as cnt from patient_registration where  patient_registration_id= '1183' and  office_id= '1' 
 Execution Time:0.002640962600708

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1183' and  doctors_registration.office_id= '1' 
 Execution Time:0.01029896736145

select fname,lname,mrdno from patient_registration where  patient_registration_id='1183' and  office_id= '1' 
 Execution Time:0.00040912628173828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063610076904297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043458938598633

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049996376037598

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028014183044434

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072002410888672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072002410888672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024318695068359

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021004676818848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047740936279297

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051498413085938

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051498413085938

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0052049160003662

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0052049160003662

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0047998428344727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018882751464844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022983551025391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047802925109863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004378080368042

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003342866897583

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003342866897583

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038590431213379

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086498260498047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086498260498047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014820098876953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014820098876953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014820098876953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017778873443604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014820098876953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017778873443604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035371780395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014820098876953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017778873443604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035371780395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037422180175781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014820098876953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017778873443604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035371780395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037422180175781

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034539699554443

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014820098876953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017778873443604

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035371780395508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037422180175781

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070500373840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059549808502197

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048303604125977

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081586837768555

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081586837768555

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026488304138184

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050497055053711

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008690357208252

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034379959106445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034379959106445

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077295303344727

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011320114135742

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041294097900391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0012030601501465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063514709472656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051712989807129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033330917358398

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047707557678223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047707557678223

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057005882263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057005882263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057005882263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053882598876953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057005882263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071501731872559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053451061248779

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001147985458374

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001147985458374

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00082993507385254

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00082993507385254

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041484832763672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041484832763672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052299499511719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052299499511719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037171840667725

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052299499511719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037171840667725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012390613555908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052299499511719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037171840667725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012390613555908

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020699501037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052299499511719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037171840667725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012390613555908

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020699501037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052299499511719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037171840667725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012390613555908

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020699501037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029358863830566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0052299499511719

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037171840667725

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012390613555908

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020699501037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029358863830566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073261260986328

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056600570678711

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037717819213867

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037717819213867

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075602531433105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075602531433105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038630962371826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038630962371826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038630962371826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0073020458221436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038630962371826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0073020458221436

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020558834075928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038630962371826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0073020458221436

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020558834075928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038630962371826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0073020458221436

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020558834075928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034220218658447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001215934753418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038630962371826

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001176118850708

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0073020458221436

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020558834075928

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034220218658447

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062088966369629

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00093293190002441

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00093293190002441

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013308525085449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013308525085449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064070224761963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064070224761963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064070224761963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016920566558838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064070224761963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016920566558838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003882884979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064070224761963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016920566558838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003882884979248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064070224761963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016920566558838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003882884979248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064070224761963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016920566558838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003882884979248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099086761474609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0064070224761963

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0016920566558838

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003882884979248

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038280487060547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003788948059082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099086761474609

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006554126739502

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036799907684326

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036799907684326

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012259483337402

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090789794921875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090789794921875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022251605987549

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022251605987549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022251605987549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001140832901001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022251605987549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001140832901001

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022251605987549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001140832901001

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022251605987549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001140832901001

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016331672668457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022251605987549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001140832901001

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016331672668457

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013208389282227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022251605987549

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025200843811035

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001140832901001

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035190582275391

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082182884216309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0016331672668457

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013208389282227

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053260326385498

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069403648376465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00069403648376465

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089788436889648

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089788436889648

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024580955505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014262199401855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014262199401855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014262199401855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078840255737305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014262199401855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078840255737305

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0066940784454346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014262199401855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078840255737305

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0066940784454346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014262199401855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078840255737305

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0066940784454346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024299621582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031139850616455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014262199401855

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0078840255737305

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0066940784454346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087094306945801

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024299621582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059971809387207

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033159255981445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033159255981445

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0022189617156982

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00051593780517578

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00020194053649902

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00061988830566406

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00061988830566406

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076985359191895

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076985359191895

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069308280944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069308280944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069308280944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069308280944824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006558895111084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051391124725342

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0004570484161377

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0004570484161377

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00025701522827148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082015991210938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082015991210938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064706802368164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064706802368164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064706802368164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007328987121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033760070800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032598972320557

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064706802368164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007328987121582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005202054977417

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0007331371307373

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0007331371307373

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00024819374084473

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019950866699219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019950866699219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019409656524658

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055201053619385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055201053619385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058519840240479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055201053619385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058519840240479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055201053619385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058519840240479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018200874328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055201053619385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058519840240479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018200874328613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023670196533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055201053619385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058519840240479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018200874328613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023670196533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042760372161865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055201053619385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058519840240479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018200874328613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023670196533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042760372161865

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097990036010742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0055201053619385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058519840240479

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018200874328613

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023670196533203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042760372161865

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00097990036010742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064492225646973

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00082993507385254

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00082993507385254

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018150806427002

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018150806427002

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0009620189666748

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075292587280273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075292587280273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087308883666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064992904663086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045084953308105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040316581726074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087308883666992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044651031494141

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037717819213867

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037717819213867

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066494941711426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066494941711426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058507919311523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051028728485107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059819221496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038313865661621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059819221496582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032930374145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066518783569336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078105926513672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052399635314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078916549682617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003659725189209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050251483917236

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005490779876709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005490779876709

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062203407287598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062203407287598

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015721321105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026111602783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015721321105957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087950229644775

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012540102005005

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012540102005005

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012540102005005

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012540102005005

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0023329257965088

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018978118896484

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-17' and  '2021-11-17' and  billing_master.office_id= 1        
 Execution Time:0.001978874206543

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-11-17' and  '2021-11-17' and  billing_master.office_id= 1        
 Execution Time:0.001978874206543

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-11-17' and '2021-11-17' and  patient_registration.office_id= 1      
 Execution Time:0.0041770935058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011568069458008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011568069458008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011568069458008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011568069458008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050711631774902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011568069458008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050711631774902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011568069458008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050711631774902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011568069458008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048112869262695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050711631774902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032339096069336

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050687789916992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050687789916992

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023412704467773

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003058910369873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012521743774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012521743774414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029671192169189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012521743774414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029671192169189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036518573760986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012521743774414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029671192169189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036518573760986

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012521743774414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029671192169189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036518573760986

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035011768341064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012521743774414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029671192169189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036518573760986

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035011768341064

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042178630828857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012521743774414

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029671192169189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036518573760986

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035500526428223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035011768341064

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0042178630828857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050151348114014

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.033740997314453

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0052299499511719

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.033740997314453

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0052299499511719

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0067501068115234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.033740997314453

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0052299499511719

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0067501068115234

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0031921863555908

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081086158752441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00044512748718262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081110000610352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021719932556152

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00040507316589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018270015716553

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00017714500427246

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00057291984558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068378448486328

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00047111511230469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00038695335388184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037813186645508

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0005488395690918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038058757781982

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015671253204346

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038058757781982

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015671253204346

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038058757781982

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0015671253204346

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.001068115234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00066184997558594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.001533031463623

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00065898895263672

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00077009201049805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009148120880127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0007171630859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00075602531433105

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00088286399841309

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059294700622559

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00079488754272461

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033349990844727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033349990844727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037381649017334

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00136399269104

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033349990844727

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037381649017334

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0034868717193604

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038740634918213

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0010390281677246

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015089511871338

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00081300735473633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00057387351989746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00060701370239258

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00041890144348145

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00087499618530273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030570030212402

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030570030212402

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0030570030212402

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00034308433532715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0046520233154297

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00084018707275391

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00067400932312012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00014400482177734

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00029516220092773

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0039029121398926

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00054502487182617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0040290355682373

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033121109008789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0027611255645752

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0040290355682373

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0028002262115479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0022640228271484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00024199485778809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00064396858215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0020790100097656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00066804885864258

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0019159317016602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010447025299072

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0036590099334717

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00056791305541992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00076413154602051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00049901008605957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0036301612854004

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00053596496582031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018596649169922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00043702125549316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00071907043457031

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011649131774902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00058197975158691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.001723051071167

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018630027770996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.001723051071167

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019700527191162

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00049805641174316

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00049805641174316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00062918663024902

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.00049805641174316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.00062918663024902

select fname,lname,mrdno from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.00017404556274414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0056619644165039

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0056619644165039

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032901763916016

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00069499015808105

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00092387199401855

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00040197372436523

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00066590309143066

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00057601928710938

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026719570159912

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0026719570159912

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00039792060852051

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00021100044250488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088095664978027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049781799316406

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073385238647461

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0002741813659668

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052499771118164

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00033283233642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081491470336914

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00081491470336914

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00023698806762695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097084045410156

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097084045410156

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084090232849121

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00097084045410156

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0007469654083252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059986114501953

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072312355041504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00072312355041504

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040197372436523


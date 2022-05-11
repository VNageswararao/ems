select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032849311828613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032849311828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032849311828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032849311828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019969940185547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032849311828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019969940185547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021340847015381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032849311828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019969940185547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021340847015381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032849311828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019969940185547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021340847015381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030550956726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032849311828613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019969940185547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021340847015381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030550956726074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053298473358154

select count(*) as cnt from patient_registration where  patient_registration_id= '1105' and  office_id= '1' 
 Execution Time:0.00058317184448242

select count(*) as cnt from patient_registration where  patient_registration_id= '1105' and  office_id= '1' 
 Execution Time:0.00058317184448242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1105' and  doctors_registration.office_id= '1' 
 Execution Time:0.003154993057251

select count(*) as cnt from patient_registration where  patient_registration_id= '1105' and  office_id= '1' 
 Execution Time:0.00058317184448242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1105' and  doctors_registration.office_id= '1' 
 Execution Time:0.003154993057251

select fname,lname,mrdno from patient_registration where  patient_registration_id='1105' and  office_id= '1' 
 Execution Time:0.00019693374633789

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055193901062012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002281665802002

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00034594535827637

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00034594535827637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027189254760742

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00034594535827637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027189254760742

select fname,lname,mrdno from patient_registration where  patient_registration_id='2759' and  office_id= '1' 
 Execution Time:0.00026106834411621

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00084900856018066

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00084900856018066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063681602478027

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063681602478027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050115585327148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037548542022705

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00078606605529785

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00078606605529785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.004889965057373

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00078606605529785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.004889965057373

select fname,lname,mrdno from patient_registration where  patient_registration_id='2759' and  office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067710876464844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067710876464844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082492828369141

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045204162597656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055530071258545

select count(*) as cnt from patient_registration where  patient_registration_id= '1537' and  office_id= '1' 
 Execution Time:0.0033981800079346

select count(*) as cnt from patient_registration where  patient_registration_id= '1537' and  office_id= '1' 
 Execution Time:0.0033981800079346

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1537' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047528743743896

select count(*) as cnt from patient_registration where  patient_registration_id= '1537' and  office_id= '1' 
 Execution Time:0.0033981800079346

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1537' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047528743743896

select fname,lname,mrdno from patient_registration where  patient_registration_id='1537' and  office_id= '1' 
 Execution Time:0.0038490295410156

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032496452331543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0001671314239502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065121650695801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065121650695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013299942016602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065121650695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013299942016602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0056941509246826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065121650695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013299942016602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0056941509246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044639110565186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065121650695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013299942016602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0056941509246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044639110565186

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0055809020996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065121650695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013299942016602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0056941509246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044639110565186

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0055809020996094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030128955841064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065121650695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013299942016602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0056941509246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044639110565186

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0055809020996094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030128955841064

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040829181671143

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0065121650695801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013299942016602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0056941509246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0044639110565186

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0055809020996094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030128955841064

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040829181671143

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012963056564331

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00061607360839844

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00061607360839844

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0006871223449707

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0006871223449707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022208690643311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022208690643311

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022208690643311

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022208690643311

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022208690643311

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022208690643311

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022208690643311

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030016899108887

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060606002807617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060606002807617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060606002807617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009160041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060606002807617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0009160041809082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005734920501709

select count(*) as cnt from patient_registration where  patient_registration_id= '2784' and  office_id= '1' 
 Execution Time:0.0005650520324707

select count(*) as cnt from patient_registration where  patient_registration_id= '2784' and  office_id= '1' 
 Execution Time:0.0005650520324707

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2784' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046510696411133

select count(*) as cnt from patient_registration where  patient_registration_id= '2784' and  office_id= '1' 
 Execution Time:0.0005650520324707

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2784' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046510696411133

select fname,lname,mrdno from patient_registration where  patient_registration_id='2784' and  office_id= '1' 
 Execution Time:0.00060701370239258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065994262695312

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00065994262695312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067687034606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067687034606934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054759979248047

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.0006108283996582

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.0006108283996582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0068390369415283

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.0006108283996582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0068390369415283

select fname,lname,mrdno from patient_registration where  patient_registration_id='2695' and  office_id= '1' 
 Execution Time:0.0010418891906738

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036406517028809

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036406517028809

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069379806518555

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035068988800049

select count(*) as cnt from patient_registration where  patient_registration_id= '2783' and  office_id= '1' 
 Execution Time:0.0013589859008789

select count(*) as cnt from patient_registration where  patient_registration_id= '2783' and  office_id= '1' 
 Execution Time:0.0013589859008789

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2783' and  doctors_registration.office_id= '1' 
 Execution Time:0.012505054473877

select count(*) as cnt from patient_registration where  patient_registration_id= '2783' and  office_id= '1' 
 Execution Time:0.0013589859008789

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2783' and  doctors_registration.office_id= '1' 
 Execution Time:0.012505054473877

select fname,lname,mrdno from patient_registration where  patient_registration_id='2783' and  office_id= '1' 
 Execution Time:0.00077509880065918

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067615509033203

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067615509033203

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098395347595215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00098395347595215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050699710845947

select count(*) as cnt from patient_registration where  patient_registration_id= '1537' and  office_id= '1' 
 Execution Time:0.00028300285339355

select count(*) as cnt from patient_registration where  patient_registration_id= '1537' and  office_id= '1' 
 Execution Time:0.00028300285339355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1537' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026848316192627

select count(*) as cnt from patient_registration where  patient_registration_id= '1537' and  office_id= '1' 
 Execution Time:0.00028300285339355

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1537' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026848316192627

select fname,lname,mrdno from patient_registration where  patient_registration_id='1537' and  office_id= '1' 
 Execution Time:0.00020599365234375

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00083422660827637

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00083422660827637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037217140197754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037217140197754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037217140197754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037217140197754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062394142150879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031530857086182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050711631774902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050711631774902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050711631774902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013809204101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050711631774902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013809204101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030069351196289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030069351196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030069351196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030069351196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015308856964111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030069351196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015308856964111

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039072036743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030069351196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015308856964111

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039072036743164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030069351196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015308856964111

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039072036743164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012731552124023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0030069351196289

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015308856964111

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039072036743164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012731552124023

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089559555053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023880004882812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023880004882812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023880004882812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023880004882812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023880004882812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026416778564453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023880004882812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026416778564453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023880004882812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026416778564453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023880004882812

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026416778564453

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048518180847168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036451816558838

select count(*) as cnt from patient_registration where  patient_registration_id= '2710' and  office_id= '1' 
 Execution Time:0.0025238990783691

select count(*) as cnt from patient_registration where  patient_registration_id= '2710' and  office_id= '1' 
 Execution Time:0.0025238990783691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2710' and  doctors_registration.office_id= '1' 
 Execution Time:0.0063619613647461

select count(*) as cnt from patient_registration where  patient_registration_id= '2710' and  office_id= '1' 
 Execution Time:0.0025238990783691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2710' and  doctors_registration.office_id= '1' 
 Execution Time:0.0063619613647461

select fname,lname,mrdno from patient_registration where  patient_registration_id='2710' and  office_id= '1' 
 Execution Time:0.0038321018218994

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00073599815368652

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00073599815368652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035977363586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041508674621582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053229331970215

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00056815147399902

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00056815147399902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041780471801758

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00056815147399902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041780471801758

select fname,lname,mrdno from patient_registration where  patient_registration_id='2759' and  office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013349056243896

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0013349056243896

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060200691223145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038409233093262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050592422485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050301551818848

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048995018005371

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018811225891113

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086808204650879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086808204650879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062680244445801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003211498260498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062680244445801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049550533294678

select count(*) as cnt from patient_registration where  patient_registration_id= '2825' and  office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from patient_registration where  patient_registration_id= '2825' and  office_id= '1' 
 Execution Time:0.00037693977355957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2825' and  doctors_registration.office_id= '1' 
 Execution Time:0.004594087600708

select count(*) as cnt from patient_registration where  patient_registration_id= '2825' and  office_id= '1' 
 Execution Time:0.00037693977355957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2825' and  doctors_registration.office_id= '1' 
 Execution Time:0.004594087600708

select fname,lname,mrdno from patient_registration where  patient_registration_id='2825' and  office_id= '1' 
 Execution Time:0.00049495697021484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059700012207031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059700012207031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.0004878044128418

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.0004878044128418

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2534' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044920444488525

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.0004878044128418

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2534' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044920444488525

select fname,lname,mrdno from patient_registration where  patient_registration_id='2534' and  office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060606002807617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00060606002807617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from patient_registration where  patient_registration_id= '2678' and  office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from patient_registration where  patient_registration_id= '2678' and  office_id= '1' 
 Execution Time:0.00052595138549805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2678' and  doctors_registration.office_id= '1' 
 Execution Time:0.002763032913208

select count(*) as cnt from patient_registration where  patient_registration_id= '2678' and  office_id= '1' 
 Execution Time:0.00052595138549805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2678' and  doctors_registration.office_id= '1' 
 Execution Time:0.002763032913208

select fname,lname,mrdno from patient_registration where  patient_registration_id='2678' and  office_id= '1' 
 Execution Time:0.00020480155944824

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003669261932373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022101402282715

select count(*) as cnt from patient_registration where  patient_registration_id= '2773' and  office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from patient_registration where  patient_registration_id= '2773' and  office_id= '1' 
 Execution Time:0.00035405158996582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2773' and  doctors_registration.office_id= '1' 
 Execution Time:0.002805233001709

select count(*) as cnt from patient_registration where  patient_registration_id= '2773' and  office_id= '1' 
 Execution Time:0.00035405158996582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2773' and  doctors_registration.office_id= '1' 
 Execution Time:0.002805233001709

select fname,lname,mrdno from patient_registration where  patient_registration_id='2773' and  office_id= '1' 
 Execution Time:0.005418062210083

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067901611328125

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00067901611328125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030994415283203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074350833892822

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074350833892822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074350833892822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021548271179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074350833892822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021548271179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0074350833892822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0021548271179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0020279884338379

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00060796737670898

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00060796737670898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.0079121589660645

select count(*) as cnt from patient_registration where  patient_registration_id= '2759' and  office_id= '1' 
 Execution Time:0.00060796737670898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2759' and  doctors_registration.office_id= '1' 
 Execution Time:0.0079121589660645

select fname,lname,mrdno from patient_registration where  patient_registration_id='2759' and  office_id= '1' 
 Execution Time:0.001183032989502

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0037438869476318

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0037438869476318

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00038409233093262

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.00052809715270996

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00074410438537598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058231353759766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058231353759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032179355621338

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058231353759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032179355621338

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020389556884766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058231353759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032179355621338

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020389556884766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058231353759766

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032179355621338

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0020389556884766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059795379638672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037741661071777

select count(*) as cnt from patient_registration where  patient_registration_id= '2246' and  office_id= '1' 
 Execution Time:0.00075292587280273

select count(*) as cnt from patient_registration where  patient_registration_id= '2246' and  office_id= '1' 
 Execution Time:0.00075292587280273

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2246' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052938461303711

select count(*) as cnt from patient_registration where  patient_registration_id= '2246' and  office_id= '1' 
 Execution Time:0.00075292587280273

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2246' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052938461303711

select fname,lname,mrdno from patient_registration where  patient_registration_id='2246' and  office_id= '1' 
 Execution Time:0.0037698745727539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.010173082351685

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.010173082351685

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.01580810546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041849613189697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041849613189697

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016510486602783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041849613189697

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016510486602783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041849613189697

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016510486602783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074481964111328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0041849613189697

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016510486602783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074481964111328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077381134033203

select count(*) as cnt from patient_registration where  patient_registration_id= '2246' and  office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_registration where  patient_registration_id= '2246' and  office_id= '1' 
 Execution Time:0.00045895576477051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2246' and  doctors_registration.office_id= '1' 
 Execution Time:0.0067620277404785

select count(*) as cnt from patient_registration where  patient_registration_id= '2246' and  office_id= '1' 
 Execution Time:0.00045895576477051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2246' and  doctors_registration.office_id= '1' 
 Execution Time:0.0067620277404785

select fname,lname,mrdno from patient_registration where  patient_registration_id='2246' and  office_id= '1' 
 Execution Time:0.0026721954345703

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089001655578613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089001655578613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00088405609130859

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00088405609130859

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040912628173828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013489723205566

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013489723205566

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055789947509766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094659328460693

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00059390068054199

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00059390068054199

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00053787231445312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024199485778809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023801326751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024199485778809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023801326751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024199485778809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023801326751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012710094451904

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024199485778809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023801326751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012710094451904

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033440589904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024199485778809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023801326751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012710094451904

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033440589904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024199485778809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023801326751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012710094451904

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033440589904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024199485778809

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023801326751709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012710094451904

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033440589904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093483924865723

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044608116149902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052249431610107

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088000297546387

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088000297546387

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038290023803711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070810317993164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070810317993164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034093856811523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042009353637695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038149356842041

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030207633972168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033919811248779

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033919811248779

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041179656982422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00514817237854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00514817237854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039241313934326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00514817237854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039241313934326

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036559104919434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00514817237854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039241313934326

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036559104919434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037820339202881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00514817237854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039241313934326

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036559104919434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037820339202881

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037751197814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00514817237854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039241313934326

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036559104919434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037820339202881

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037751197814941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00514817237854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039241313934326

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036559104919434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037820339202881

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037751197814941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041589736938477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00514817237854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039241313934326

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036559104919434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037820339202881

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037751197814941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041589736938477

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075130462646484

select count(*) as cnt from patient_registration where  patient_registration_id= '1204' and  office_id= '1' 
 Execution Time:0.0019099712371826

select count(*) as cnt from patient_registration where  patient_registration_id= '1204' and  office_id= '1' 
 Execution Time:0.0019099712371826

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046489238739014

select count(*) as cnt from patient_registration where  patient_registration_id= '1204' and  office_id= '1' 
 Execution Time:0.0019099712371826

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0046489238739014

select fname,lname,mrdno from patient_registration where  patient_registration_id='1204' and  office_id= '1' 
 Execution Time:0.00080704689025879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066208839416504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00066208839416504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030684471130371

select count(*) as cnt from patient_registration where  patient_registration_id= '2795' and  office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from patient_registration where  patient_registration_id= '2795' and  office_id= '1' 
 Execution Time:0.00040006637573242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2795' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026388168334961

select count(*) as cnt from patient_registration where  patient_registration_id= '2795' and  office_id= '1' 
 Execution Time:0.00040006637573242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2795' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026388168334961

select fname,lname,mrdno from patient_registration where  patient_registration_id='2795' and  office_id= '1' 
 Execution Time:0.00020408630371094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051283836364746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051283836364746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023269653320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023269653320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023269653320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023269653320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067305564880371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023269653320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067305564880371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023269653320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067305564880371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013129711151123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012819766998291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023269653320312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065088272094727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067305564880371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006859302520752

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013129711151123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059270858764648

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075507164001465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00075507164001465

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0018579959869385

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00036883354187012

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00036883354187012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025289058685303

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00036883354187012

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.0025289058685303

select fname,lname,mrdno from patient_registration where  patient_registration_id='1618' and  office_id= '1' 
 Execution Time:0.0041420459747314

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024068355560303

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024068355560303

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00217604637146

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.013206005096436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.013206005096436

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068600177764893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.013206005096436

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068600177764893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011007785797119

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.013206005096436

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068600177764893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011007785797119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010775089263916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.013206005096436

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068600177764893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011007785797119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010775089263916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010149478912354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032298564910889

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.013206005096436

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0068600177764893

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011007785797119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010775089263916

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010149478912354

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058810710906982

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00050091743469238

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00050091743469238

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00025677680969238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011730194091797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011730194091797

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014419555664062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011730194091797

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014419555664062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011730194091797

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014419555664062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011730194091797

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014419555664062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063779354095459

select count(*) as cnt from patient_registration where  patient_registration_id= '2137' and  office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from patient_registration where  patient_registration_id= '2137' and  office_id= '1' 
 Execution Time:0.00035905838012695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2137' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041110515594482

select count(*) as cnt from patient_registration where  patient_registration_id= '2137' and  office_id= '1' 
 Execution Time:0.00035905838012695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2137' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041110515594482

select fname,lname,mrdno from patient_registration where  patient_registration_id='2137' and  office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from patient_registration where  patient_registration_id= '2574' and  office_id= '1' 
 Execution Time:0.0016539096832275

select count(*) as cnt from patient_registration where  patient_registration_id= '2574' and  office_id= '1' 
 Execution Time:0.0016539096832275

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2574' and  doctors_registration.office_id= '1' 
 Execution Time:0.005424976348877

select count(*) as cnt from patient_registration where  patient_registration_id= '2574' and  office_id= '1' 
 Execution Time:0.0016539096832275

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2574' and  doctors_registration.office_id= '1' 
 Execution Time:0.005424976348877

select fname,lname,mrdno from patient_registration where  patient_registration_id='2574' and  office_id= '1' 
 Execution Time:0.0038070678710938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071907043457031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022110939025879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select count(*) as cnt from patient_registration where  patient_registration_id= '1204' and  office_id= '1' 
 Execution Time:0.00050020217895508

select count(*) as cnt from patient_registration where  patient_registration_id= '1204' and  office_id= '1' 
 Execution Time:0.00050020217895508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049519538879395

select count(*) as cnt from patient_registration where  patient_registration_id= '1204' and  office_id= '1' 
 Execution Time:0.00050020217895508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049519538879395

select fname,lname,mrdno from patient_registration where  patient_registration_id='1204' and  office_id= '1' 
 Execution Time:0.0019321441650391

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0062699317932129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0062699317932129

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046801567077637

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00095391273498535

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.003532886505127

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.0038340091705322

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027298927307129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0055828094482422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065290927886963

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003878116607666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0027298927307129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0055828094482422

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0038490295410156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038819313049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038819313049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038819313049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024251937866211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038819313049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024251937866211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012590885162354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038819313049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024251937866211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012590885162354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033578872680664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038819313049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024251937866211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012590885162354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033578872680664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032668113708496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038819313049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024251937866211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012590885162354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033578872680664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032668113708496

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010888576507568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038819313049316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011508464813232

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024251937866211

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012590885162354

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0033578872680664

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032668113708496

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010888576507568

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00895094871521

select count(*) as cnt from patient_registration where  patient_registration_id= '2236' and  office_id= '1' 
 Execution Time:0.0036628246307373

select count(*) as cnt from patient_registration where  patient_registration_id= '2236' and  office_id= '1' 
 Execution Time:0.0036628246307373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2236' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047588348388672

select count(*) as cnt from patient_registration where  patient_registration_id= '2236' and  office_id= '1' 
 Execution Time:0.0036628246307373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2236' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047588348388672

select fname,lname,mrdno from patient_registration where  patient_registration_id='2236' and  office_id= '1' 
 Execution Time:0.0037639141082764

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012011528015137

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012011528015137

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from patient_registration where  patient_registration_id= '2799' and  office_id= '1' 
 Execution Time:0.00086498260498047

select count(*) as cnt from patient_registration where  patient_registration_id= '2799' and  office_id= '1' 
 Execution Time:0.00086498260498047

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2799' and  doctors_registration.office_id= '1' 
 Execution Time:0.0065970420837402

select count(*) as cnt from patient_registration where  patient_registration_id= '2799' and  office_id= '1' 
 Execution Time:0.00086498260498047

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2799' and  doctors_registration.office_id= '1' 
 Execution Time:0.0065970420837402

select fname,lname,mrdno from patient_registration where  patient_registration_id='2799' and  office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016369819641113

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016369819641113

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001410961151123

select count(*) as cnt from patient_registration where  patient_registration_id= '2209' and  office_id= '1' 
 Execution Time:0.0021100044250488

select count(*) as cnt from patient_registration where  patient_registration_id= '2209' and  office_id= '1' 
 Execution Time:0.0021100044250488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2209' and  doctors_registration.office_id= '1' 
 Execution Time:0.0085461139678955

select count(*) as cnt from patient_registration where  patient_registration_id= '2209' and  office_id= '1' 
 Execution Time:0.0021100044250488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2209' and  doctors_registration.office_id= '1' 
 Execution Time:0.0085461139678955

select fname,lname,mrdno from patient_registration where  patient_registration_id='2209' and  office_id= '1' 
 Execution Time:0.00090813636779785

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054693222045898

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054693222045898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002748966217041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015027046203613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015027046203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050508975982666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015027046203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050508975982666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015027046203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050508975982666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.015027046203613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0050508975982666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019068717956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0048329830169678

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0031919479370117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062830448150635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062830448150635

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062830448150635

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040950775146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062830448150635

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040950775146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062830448150635

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040950775146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021951198577881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062830448150635

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040950775146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021951198577881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014939308166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0062830448150635

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040950775146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021951198577881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014939308166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076389312744141

select count(*) as cnt from patient_registration where  patient_registration_id= '2805' and  office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from patient_registration where  patient_registration_id= '2805' and  office_id= '1' 
 Execution Time:0.00055503845214844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2805' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041720867156982

select count(*) as cnt from patient_registration where  patient_registration_id= '2805' and  office_id= '1' 
 Execution Time:0.00055503845214844

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2805' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041720867156982

select fname,lname,mrdno from patient_registration where  patient_registration_id='2805' and  office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009148120880127

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009148120880127

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042510032653809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036468505859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036468505859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036468505859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031931400299072

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036468505859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031931400299072

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018448829650879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036468505859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0031931400299072

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018448829650879

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select count(*) as cnt from patient_registration where  patient_registration_id= '2829' and  office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from patient_registration where  patient_registration_id= '2829' and  office_id= '1' 
 Execution Time:0.00044393539428711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2829' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041971206665039

select count(*) as cnt from patient_registration where  patient_registration_id= '2829' and  office_id= '1' 
 Execution Time:0.00044393539428711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2829' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041971206665039

select fname,lname,mrdno from patient_registration where  patient_registration_id='2829' and  office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078296661376953

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078296661376953

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047898292541504

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00049114227294922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081520080566406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081520080566406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020668506622314

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081520080566406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020668506622314

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034830570220947

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081520080566406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020668506622314

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034830570220947

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0030050277709961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081520080566406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020668506622314

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034830570220947

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0030050277709961

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026838779449463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015060901641846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015060901641846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015060901641846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015060901641846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015060901641846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015060901641846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015060901641846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085020065307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015060901641846

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080108642578125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025510787963867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085020065307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054161548614502

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.00050091743469238

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.00050091743469238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2041' and  doctors_registration.office_id= '1' 
 Execution Time:0.002830982208252

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.00050091743469238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2041' and  doctors_registration.office_id= '1' 
 Execution Time:0.002830982208252

select fname,lname,mrdno from patient_registration where  patient_registration_id='2041' and  office_id= '1' 
 Execution Time:0.00025701522827148

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00063300132751465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069284439086914

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071597099304199

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071597099304199

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021100044250488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049185752868652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049185752868652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017638206481934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017638206481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001957893371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017638206481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001957893371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017638206481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001957893371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064492225646973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017638206481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001957893371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064492225646973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017638206481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001957893371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064492225646973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090408325195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017638206481934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001957893371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064492225646973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00090408325195312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056400299072266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001380443572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001380443572998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001380443572998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001380443572998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025949478149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001380443572998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015997886657715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023388862609863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003324031829834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062680244445801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062680244445801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062680244445801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062680244445801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062680244445801

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074005126953125

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.00032782554626465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029098987579346

select count(*) as cnt from patient_registration where  patient_registration_id= '2695' and  office_id= '1' 
 Execution Time:0.00032782554626465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2695' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029098987579346

select fname,lname,mrdno from patient_registration where  patient_registration_id='2695' and  office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021231174468994

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0021231174468994

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00049400329589844

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.0011060237884521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089430809020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089430809020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035650730133057

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089430809020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035650730133057

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089430809020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035650730133057

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0059518814086914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089430809020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035650730133057

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0059518814086914

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00074577331542969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001133918762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001133918762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001133918762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001133918762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010800361633301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0012130737304688

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012190341949463

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001133918762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00086712837219238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010800361633301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025651454925537

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025651454925537

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0025651454925537

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0026340484619141

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00032806396484375

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 84 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00031590461730957

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 84 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001270055770874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001270055770874

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00037097930908203

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 84 
 Execution Time:0.00037121772766113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005040168762207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038290023803711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051372051239014

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00055909156799316

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 84 
 Execution Time:0.00053095817565918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select * from examination where examination_id= '27' and   office_id= '1' 
 Execution Time:0.004025936126709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0034990310668945

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 27 
 Execution Time:0.0024669170379639

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.052430152893066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0087599754333496

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0087599754333496

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0013689994812012

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00083684921264648

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0037548542022705

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.011224985122681

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0013411045074463

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='7' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00048708915710449

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='9' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0015830993652344

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00087809562683105

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00015783309936523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00030803680419922

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 84 
 Execution Time:0.00018405914306641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013589859008789

select * from examination where examination_id= '27' and   office_id= '1' 
 Execution Time:0.00099802017211914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 27 
 Execution Time:0.00034618377685547

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.00023698806762695

select * from examination where examination_id= '27' and   office_id= '1' 
 Execution Time:0.00099802017211914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 27 
 Execution Time:0.00034618377685547

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.00023698806762695

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00030994415283203

select * from examination where examination_id= '27' and   office_id= '1' 
 Execution Time:0.00099802017211914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 27 
 Execution Time:0.00034618377685547

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.00023698806762695

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00030994415283203

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00014710426330566

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052809715270996

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00052809715270996

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033211708068848

select * from examination where examination_id= '27' and   office_id= '1' 
 Execution Time:0.0034317970275879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 27 
 Execution Time:0.0021040439605713

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.0027179718017578

select * from examination where examination_id= '27' and   office_id= '1' 
 Execution Time:0.0034317970275879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 27 
 Execution Time:0.0021040439605713

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.0027179718017578

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0027470588684082

select * from examination where examination_id= '27' and   office_id= '1' 
 Execution Time:0.0034317970275879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011789798736572

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 27 
 Execution Time:0.0021040439605713

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.0027179718017578

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0027470588684082

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0027568340301514

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00062394142150879

SELECT *
FROM `examination`
WHERE `examination_id` = 27 
 Execution Time:0.00079798698425293

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 7 
 Execution Time:0.00046896934509277

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00038695335388184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00026988983154297

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00048995018005371

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=27 
 Execution Time:0.00083518028259277

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=27 
 Execution Time:0.0032119750976562

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=27 
 Execution Time:0.00066208839416504

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=27 
 Execution Time:0.00057697296142578

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='27' and office_id='1' 
 Execution Time:0.00079703330993652

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.00046992301940918

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00062394142150879

SELECT *
FROM `examination`
WHERE `examination_id` = 27 
 Execution Time:0.00079798698425293

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 7 
 Execution Time:0.00046896934509277

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00038695335388184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00026988983154297

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00048995018005371

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=27 
 Execution Time:0.00083518028259277

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=27 
 Execution Time:0.0032119750976562

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=27 
 Execution Time:0.00066208839416504

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=27 
 Execution Time:0.00057697296142578

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='27' and office_id='1' 
 Execution Time:0.00079703330993652

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.00046992301940918

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00053286552429199

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00062394142150879

SELECT *
FROM `examination`
WHERE `examination_id` = 27 
 Execution Time:0.00079798698425293

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 7 
 Execution Time:0.00046896934509277

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00038695335388184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00026988983154297

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00048995018005371

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=27 
 Execution Time:0.00083518028259277

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=27 
 Execution Time:0.0032119750976562

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=27 
 Execution Time:0.00066208839416504

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=27 
 Execution Time:0.00057697296142578

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='27' and office_id='1' 
 Execution Time:0.00079703330993652

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.00046992301940918

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00053286552429199

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00025200843811035

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046682357788086

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046682357788086

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074195861816406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074195861816406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072002410888672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072002410888672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072002410888672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015921592712402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072002410888672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015921592712402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058901309967041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068306922912598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053620338439941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076603889465332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select count(*) as cnt from patient_registration where  patient_registration_id= '60' and  office_id= '1' 
 Execution Time:0.00044989585876465

select count(*) as cnt from patient_registration where  patient_registration_id= '60' and  office_id= '1' 
 Execution Time:0.00044989585876465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='60' and  doctors_registration.office_id= '1' 
 Execution Time:0.00081896781921387

select count(*) as cnt from patient_registration where  patient_registration_id= '60' and  office_id= '1' 
 Execution Time:0.00044989585876465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='60' and  doctors_registration.office_id= '1' 
 Execution Time:0.00081896781921387

select fname,lname,mrdno from patient_registration where  patient_registration_id='60' and  office_id= '1' 
 Execution Time:0.00027585029602051

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00071406364440918

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00071406364440918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00039482116699219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00032687187194824

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 85 
 Execution Time:0.00067496299743652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select count(*) as cnt from patient_registration where  patient_registration_id= '629' and  office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_registration where  patient_registration_id= '629' and  office_id= '1' 
 Execution Time:0.00048398971557617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='629' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053160190582275

select count(*) as cnt from patient_registration where  patient_registration_id= '629' and  office_id= '1' 
 Execution Time:0.00048398971557617

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='629' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053160190582275

select fname,lname,mrdno from patient_registration where  patient_registration_id='629' and  office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069117546081543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00069117546081543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050878524780273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038719177246094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038719177246094

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026988983154297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037813186645508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063300132751465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063300132751465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057387351989746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053670406341553

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085687637329102

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00085687637329102

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0019979476928711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031661987304688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031661987304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031661987304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031661987304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002357006072998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031661987304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002357006072998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031661987304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002357006072998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042548179626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031661987304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002357006072998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042548179626465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002335786819458

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031661987304688

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0017731189727783

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038390159606934

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002357006072998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014748573303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042548179626465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002335786819458

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068600177764893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070769786834717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_registration where  patient_registration_id= '2833' and  office_id= '1' 
 Execution Time:0.0023670196533203

select count(*) as cnt from patient_registration where  patient_registration_id= '2833' and  office_id= '1' 
 Execution Time:0.0023670196533203

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2833' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044341087341309

select count(*) as cnt from patient_registration where  patient_registration_id= '2833' and  office_id= '1' 
 Execution Time:0.0023670196533203

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2833' and  doctors_registration.office_id= '1' 
 Execution Time:0.0044341087341309

select fname,lname,mrdno from patient_registration where  patient_registration_id='2833' and  office_id= '1' 
 Execution Time:0.0018630027770996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0042190551757812

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0042190551757812

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013937950134277

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0042190551757812

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0013937950134277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00072908401489258

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 85 
 Execution Time:0.0041799545288086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select * from examination where examination_id= '28' and   office_id= '1' 
 Execution Time:0.00085115432739258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0034370422363281

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 28 
 Execution Time:0.0029752254486084

select * from examination_chargesdetails where  examination_id= '28' 
 Execution Time:0.0028681755065918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.02056097984314

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.02056097984314

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038859844207764

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0052089691162109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0052089691162109

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029759407043457

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0013039112091064

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088760852813721

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088760852813721

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088760852813721

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035710334777832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088760852813721

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035710334777832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088760852813721

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038299560546875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035710334777832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0038089752197266

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00040698051452637

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00040698051452637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041708946228027

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00040698051452637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041708946228027

select fname,lname,mrdno from patient_registration where  patient_registration_id='1618' and  office_id= '1' 
 Execution Time:0.00072693824768066

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087904930114746

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00087904930114746

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077009201049805

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00042319297790527

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00066781044006348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060179233551025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060179233551025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060179233551025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060179233551025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060179233551025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_registration where  patient_registration_id= '2833' and  office_id= '1' 
 Execution Time:0.00053906440734863

select count(*) as cnt from patient_registration where  patient_registration_id= '2833' and  office_id= '1' 
 Execution Time:0.00053906440734863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2833' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055949687957764

select count(*) as cnt from patient_registration where  patient_registration_id= '2833' and  office_id= '1' 
 Execution Time:0.00053906440734863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2833' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055949687957764

select fname,lname,mrdno from patient_registration where  patient_registration_id='2833' and  office_id= '1' 
 Execution Time:0.0037071704864502

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003568172454834

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003568172454834

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001291036605835

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.003568172454834

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00090909004211426

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 85 
 Execution Time:0.00092792510986328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select * from examination where examination_id= '28' and   office_id= '1' 
 Execution Time:0.004986047744751

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 28 
 Execution Time:0.0039248466491699

select * from examination_chargesdetails where  examination_id= '28' 
 Execution Time:0.0039341449737549

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038430690765381

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038430690765381

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038731098175049

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0011060237884521

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.0021519660949707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047309398651123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047309398651123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017721652984619

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047309398651123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017721652984619

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016679763793945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047309398651123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017721652984619

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016679763793945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047309398651123

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017721652984619

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016679763793945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0034739971160889

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085830688476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085830688476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0081489086151123

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085830688476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0081489086151123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.012578964233398

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085830688476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0081489086151123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.012578964233398

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085830688476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0081489086151123

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.012578964233398

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0024590492248535

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0033218860626221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052809715270996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053400993347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076389312744141

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053250789642334

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0069959163665771

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079202651977539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079202651977539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002741813659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033290386199951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033290386199951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033290386199951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033290386199951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033290386199951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033290386199951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033290386199951

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065898895263672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059959888458252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033540725708008

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select count(*) as cnt from patient_registration where  patient_registration_id= '2839' and  office_id= '1' 
 Execution Time:0.00041818618774414

select count(*) as cnt from patient_registration where  patient_registration_id= '2839' and  office_id= '1' 
 Execution Time:0.00041818618774414

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2839' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026810169219971

select count(*) as cnt from patient_registration where  patient_registration_id= '2839' and  office_id= '1' 
 Execution Time:0.00041818618774414

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2839' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026810169219971

select fname,lname,mrdno from patient_registration where  patient_registration_id='2839' and  office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015010833740234

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015010833740234

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.0096650123596191

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061979293823242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061979293823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061979293823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061979293823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061979293823242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001521110534668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001521110534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001521110534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001521110534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025081634521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001521110534668

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002131462097168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00025081634521484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034849643707275

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037651062011719

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054311752319336

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060796737670898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056629180908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025796890258789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058889389038086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035550594329834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059199333190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059199333190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059199333190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059199333190918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_registration where  patient_registration_id= '2833' and  office_id= '1' 
 Execution Time:0.0036141872406006

select count(*) as cnt from patient_registration where  patient_registration_id= '2833' and  office_id= '1' 
 Execution Time:0.0036141872406006

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2833' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048480033874512

select count(*) as cnt from patient_registration where  patient_registration_id= '2833' and  office_id= '1' 
 Execution Time:0.0036141872406006

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2833' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048480033874512

select fname,lname,mrdno from patient_registration where  patient_registration_id='2833' and  office_id= '1' 
 Execution Time:0.00075292587280273

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069212913513184

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069212913513184

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040698051452637

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00087594985961914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081791877746582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081791877746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081791877746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081791877746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081791877746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021588802337646

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036439895629883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037798881530762

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0048520565032959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017499923706055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043950080871582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001093864440918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.001093864440918

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0009458065032959

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00082492828369141

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00082492828369141

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037508010864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037508010864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037508010864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040891170501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037508010864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040891170501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037508010864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040891170501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037508010864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040891170501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094890594482422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037989616394043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037508010864258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040891170501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00094890594482422

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058259963989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059058666229248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059058666229248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0053761005401611

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059058666229248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0053761005401611

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059058666229248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0053761005401611

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059058666229248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0053761005401611

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036931037902832

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00084614753723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042295455932617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041794776916504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041329860687256

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043106079101562

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026082992553711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023190975189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023190975189209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.007983922958374

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019049644470215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019049644470215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093197822570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019049644470215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093197822570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019049644470215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093197822570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019049644470215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093197822570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017988681793213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019049644470215

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093197822570801

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017988681793213

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056071281433105

select count(*) as cnt from patient_registration where  patient_registration_id= '2416' and  office_id= '1' 
 Execution Time:0.00039815902709961

select count(*) as cnt from patient_registration where  patient_registration_id= '2416' and  office_id= '1' 
 Execution Time:0.00039815902709961

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2416' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028209686279297

select count(*) as cnt from patient_registration where  patient_registration_id= '2416' and  office_id= '1' 
 Execution Time:0.00039815902709961

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2416' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028209686279297

select fname,lname,mrdno from patient_registration where  patient_registration_id='2416' and  office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056600570678711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026488304138184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059788227081299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059788227081299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059788227081299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0057129859924316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059788227081299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0057129859924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011610984802246

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059788227081299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078296661376953

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0057129859924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011610984802246

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.000762939453125

select count(*) as cnt from patient_registration where  patient_registration_id= '2842' and  office_id= '1' 
 Execution Time:0.0007319450378418

select count(*) as cnt from patient_registration where  patient_registration_id= '2842' and  office_id= '1' 
 Execution Time:0.0007319450378418

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2842' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047881603240967

select count(*) as cnt from patient_registration where  patient_registration_id= '2842' and  office_id= '1' 
 Execution Time:0.0007319450378418

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2842' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047881603240967

select fname,lname,mrdno from patient_registration where  patient_registration_id='2842' and  office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092315673828125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00092315673828125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041508674621582

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00065803527832031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060489177703857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060489177703857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060489177703857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060489177703857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060489177703857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091814994812012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081610679626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020608901977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030899047851562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042738914489746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078010559082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010738372802734

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006561279296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023102760314941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078010559082031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054478645324707

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.00040292739868164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2841' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048208236694336

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.00040292739868164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2841' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048208236694336

select fname,lname,mrdno from patient_registration where  patient_registration_id='2841' and  office_id= '1' 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032591819763184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073099136352539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026321411132812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026321411132812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026321411132812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026321411132812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026321411132812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033807754516602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029711723327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012140274047852

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046610832214355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059618949890137

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059618949890137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059618949890137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059618949890137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059618949890137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0006568431854248

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.00042819976806641

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.00042819976806641

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2841' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027370452880859

select count(*) as cnt from patient_registration where  patient_registration_id= '2841' and  office_id= '1' 
 Execution Time:0.00042819976806641

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2841' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027370452880859

select fname,lname,mrdno from patient_registration where  patient_registration_id='2841' and  office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068807601928711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00068807601928711

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041413307189941

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00049710273742676

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00069522857666016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083017349243164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051617622375488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060415267944336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037312507629395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051617622375488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005720853805542

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017309188842773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017309188842773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017309188842773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017309188842773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017309188842773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031399726867676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040140151977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010018348693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010018348693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031909942626953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010018348693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031909942626953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010018348693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031909942626953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010018348693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031909942626953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014939308166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010018348693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031909942626953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00077986717224121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012547969818115

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014939308166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056629180908203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006718635559082

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0006718635559082

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00077509880065918

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00077509880065918

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.002072811126709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041680335998535

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041680335998535

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0024869441986084

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075292587280273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075292587280273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057971477508545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057971477508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057971477508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057971477508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021679401397705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057971477508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021679401397705

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057971477508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021679401397705

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057971477508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021679401397705

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040340423583984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057971477508545

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025980472564697

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017001628875732

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021679401397705

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031459331512451

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0040340423583984

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069658756256104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046610832214355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054590702056885

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010800361633301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010800361633301

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012238025665283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052449703216553

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012500286102295

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012500286102295

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007328987121582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007328987121582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038878917694092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038878917694092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038878917694092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00384521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038878917694092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00384521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037400722503662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038878917694092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00384521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037400722503662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003756046295166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038878917694092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00384521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037400722503662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003756046295166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028719902038574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038878917694092

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037910938262939

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00384521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037400722503662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003756046295166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028719902038574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059940814971924

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034010410308838

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034010410308838

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013289451599121

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067496299743652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022749900817871

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040793418884277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067496299743652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059511661529541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059511661529541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055711269378662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055711269378662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055711269378662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055711269378662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055711269378662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.00049805641174316

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.00049805641174316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2041' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048840045928955

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.00049805641174316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2041' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048840045928955

select fname,lname,mrdno from patient_registration where  patient_registration_id='2041' and  office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from laser where  office_id= 1 and status=1 
 Execution Time:0.046113014221191

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010120868682861

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010120868682861

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069999694824219

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00048017501831055

select * from investigation where  investigation_id=18  and office_id= 1 and status=1 
 Execution Time:0.00043606758117676

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00066995620727539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054018497467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006248950958252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006248950958252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006248950958252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008540153503418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005347728729248

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006248950958252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0008540153503418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063290596008301

select count(*) as cnt from patient_registration where  patient_registration_id= '2646' and  office_id= '1' 
 Execution Time:0.00027012825012207

select count(*) as cnt from patient_registration where  patient_registration_id= '2646' and  office_id= '1' 
 Execution Time:0.00027012825012207

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2646' and  doctors_registration.office_id= '1' 
 Execution Time:0.002647876739502

select count(*) as cnt from patient_registration where  patient_registration_id= '2646' and  office_id= '1' 
 Execution Time:0.00027012825012207

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2646' and  doctors_registration.office_id= '1' 
 Execution Time:0.002647876739502

select fname,lname,mrdno from patient_registration where  patient_registration_id='2646' and  office_id= '1' 
 Execution Time:0.00033688545227051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0058450698852539

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0058450698852539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0047869682312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025100708007812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025100708007812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074100494384766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025100708007812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074100494384766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025100708007812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074100494384766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025100708007812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074100494384766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013501644134521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016560554504395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025100708007812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074100494384766

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000244140625

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013501644134521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038211345672607

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056314468383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056314468383789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056314468383789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056314468383789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072193145751953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056314468383789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072193145751953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051860809326172

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0027949810028076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052785873413086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045158863067627

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064802169799805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064802169799805

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067305564880371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067305564880371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038599967956543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054788589477539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037078857421875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045204162597656

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014550685882568

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006868839263916

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006868839263916

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078701972961426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055599212646484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00065708160400391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005340576171875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004094123840332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041408538818359

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041408538818359

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0038399696350098

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012190341949463

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012190341949463

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031280517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081586837768555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081586837768555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081586837768555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081586837768555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010290145874023

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00093507766723633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00081586837768555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063350200653076

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032620429992676

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032620429992676

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041317939758301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031614303588867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031614303588867

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048685073852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048685073852539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048685073852539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048685073852539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048685073852539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054149627685547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057868957519531

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057868957519531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057868957519531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057868957519531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057868957519531

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0016798973083496

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select count(*) as cnt from patient_registration where  patient_registration_id= '2850' and  office_id= '1' 
 Execution Time:0.00071477890014648

select count(*) as cnt from patient_registration where  patient_registration_id= '2850' and  office_id= '1' 
 Execution Time:0.00071477890014648

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2850' and  doctors_registration.office_id= '1' 
 Execution Time:0.0059020519256592

select count(*) as cnt from patient_registration where  patient_registration_id= '2850' and  office_id= '1' 
 Execution Time:0.00071477890014648

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2850' and  doctors_registration.office_id= '1' 
 Execution Time:0.0059020519256592

select fname,lname,mrdno from patient_registration where  patient_registration_id='2850' and  office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00099897384643555

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00099897384643555

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048589706420898

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0021758079528809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007382869720459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007382869720459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007382869720459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007382869720459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0034110546112061

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007382869720459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037128925323486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0034110546112061

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0030128955841064

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049781799316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049781799316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049781799316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002849817276001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049781799316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002849817276001

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018470287322998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049781799316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002849817276001

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018470287322998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049781799316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002849817276001

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018470287322998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015411376953125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049781799316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002849817276001

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018470287322998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015411376953125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041220188140869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0049781799316406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002849817276001

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018470287322998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015411376953125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0041220188140869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067079067230225

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00080990791320801

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00080990791320801

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009920597076416

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009920597076416

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066399574279785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055639743804932

select count(*) as cnt from patient_registration where  patient_registration_id= '2199' and  office_id= '1' 
 Execution Time:0.0075240135192871

select count(*) as cnt from patient_registration where  patient_registration_id= '2199' and  office_id= '1' 
 Execution Time:0.0075240135192871

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2199' and  doctors_registration.office_id= '1' 
 Execution Time:0.008159875869751

select count(*) as cnt from patient_registration where  patient_registration_id= '2199' and  office_id= '1' 
 Execution Time:0.0075240135192871

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2199' and  doctors_registration.office_id= '1' 
 Execution Time:0.008159875869751

select fname,lname,mrdno from patient_registration where  patient_registration_id='2199' and  office_id= '1' 
 Execution Time:0.0067658424377441

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078415870666504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078415870666504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042510032653809

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062894821166992

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062894821166992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025582313537598

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074601173400879

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074601173400879

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060606002807617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060606002807617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050497055053711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044610500335693

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075507164001465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075507164001465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013489723205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013489723205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013489723205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013489723205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013489723205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000518798828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013489723205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002953052520752

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0009758472442627

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0009758472442627

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047397613525391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034191608428955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071096420288086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00065493583679199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0034191608428955

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005511999130249

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035285949707031

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023102760314941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081491470336914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081491470336914

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075697898864746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024011135101318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024011135101318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003309965133667

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024011135101318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003309965133667

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024011135101318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003309965133667

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024011135101318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003309965133667

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021250247955322

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024011135101318

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003309965133667

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038695335388184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038120746612549

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039451122283936

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054812431335449

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_registration where  patient_registration_id= '2852' and  office_id= '1' 
 Execution Time:0.0037491321563721

select count(*) as cnt from patient_registration where  patient_registration_id= '2852' and  office_id= '1' 
 Execution Time:0.0037491321563721

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2852' and  doctors_registration.office_id= '1' 
 Execution Time:0.0079128742218018

select count(*) as cnt from patient_registration where  patient_registration_id= '2852' and  office_id= '1' 
 Execution Time:0.0037491321563721

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2852' and  doctors_registration.office_id= '1' 
 Execution Time:0.0079128742218018

select fname,lname,mrdno from patient_registration where  patient_registration_id='2852' and  office_id= '1' 
 Execution Time:0.0037600994110107

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011188983917236

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0011188983917236

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016100406646729

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.00058603286743164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054631233215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054631233215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054631233215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054631233215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054631233215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070881843566895

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059914588928223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059914588928223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059914588928223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059914588928223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013549327850342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010621547698975

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010080337524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00059914588928223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013549327850342

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041308403015137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068497657775879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068497657775879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068497657775879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061988830566406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088310241699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084686279296875

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030229091644287

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068497657775879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061988830566406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064601898193359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007941722869873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007941722869873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021531581878662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007941722869873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021531581878662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007941722869873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021531581878662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001431941986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015270709991455

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025830268859863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0007941722869873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021531581878662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013339519500732

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001431941986084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066781044006348

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00082612037658691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00082612037658691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073599815368652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00073599815368652

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032689571380615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032689571380615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032689571380615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093603134155273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032689571380615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093603134155273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032689571380615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093603134155273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032689571380615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093603134155273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081396102905273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032689571380615

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077915191650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00093603134155273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0016648769378662

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081396102905273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056090354919434

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066804885864258

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066804885864258

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040316581726074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064992904663086

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064992904663086

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0041849613189697

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046110153198242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056791305541992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078797340393066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061450004577637

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033783912658691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051999092102051

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005338191986084

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005338191986084

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041129589080811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041129589080811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041129589080811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022799968719482

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041129589080811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022799968719482

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041129589080811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022799968719482

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045969486236572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041129589080811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022799968719482

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045969486236572

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014181137084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031859874725342

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0041129589080811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038800239562988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022799968719482

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045969486236572

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014181137084961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073411464691162

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032479763031006

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032479763031006

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058507919311523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016639232635498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016639232635498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016639232635498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016639232635498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088810920715332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080609321594238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039219856262207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0016639232635498

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078201293945312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0059518814086914

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050580501556396

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033562183380127

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050580501556396

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033562183380127

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0050580501556396

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0033562183380127

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0024299621582031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00044012069702148

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 84 
 Execution Time:0.00024294853210449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025889873504639

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025889873504639

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036311149597168

select * from examination where examination_id= '27' and   office_id= '1' 
 Execution Time:0.001835823059082

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 27 
 Execution Time:0.0057659149169922

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.0024030208587646

select * from examination where examination_id= '27' and   office_id= '1' 
 Execution Time:0.001835823059082

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 27 
 Execution Time:0.0057659149169922

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.0024030208587646

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select * from examination where examination_id= '27' and   office_id= '1' 
 Execution Time:0.001835823059082

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018370151519775

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 27 
 Execution Time:0.0057659149169922

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.0024030208587646

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0004279613494873

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00020098686218262

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00072598457336426

SELECT *
FROM `examination`
WHERE `examination_id` = 27 
 Execution Time:0.0006251335144043

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 7 
 Execution Time:0.00047993659973145

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00045394897460938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00032401084899902

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=27 
 Execution Time:0.00098991394042969

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=27 
 Execution Time:0.00078201293945312

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=27 
 Execution Time:0.00072717666625977

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=27 
 Execution Time:0.00042891502380371

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='27' and office_id='1' 
 Execution Time:0.00085902214050293

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.00051212310791016

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00072598457336426

SELECT *
FROM `examination`
WHERE `examination_id` = 27 
 Execution Time:0.0006251335144043

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 7 
 Execution Time:0.00047993659973145

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00045394897460938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00032401084899902

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=27 
 Execution Time:0.00098991394042969

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=27 
 Execution Time:0.00078201293945312

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=27 
 Execution Time:0.00072717666625977

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=27 
 Execution Time:0.00042891502380371

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='27' and office_id='1' 
 Execution Time:0.00085902214050293

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.00051212310791016

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00020980834960938

SELECT *
FROM `office`
WHERE `office_id` = 1 
 Execution Time:0.00072598457336426

SELECT *
FROM `examination`
WHERE `examination_id` = 27 
 Execution Time:0.0006251335144043

SELECT *
FROM `doctors_registration`
WHERE `doctors_registration_id` = 7 
 Execution Time:0.00047993659973145

SELECT *
FROM `user`
WHERE `user_id` = 105 
 Execution Time:0.00045394897460938

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 60 
 Execution Time:0.00032496452331543

SELECT *
FROM `patient_title`
WHERE `patient_title_id` = 21 
 Execution Time:0.00032401084899902

select * from examination_complaints inner join complaints on examination_complaints.complaints_id=complaints.complaints_id where examination_id=27 
 Execution Time:0.00098991394042969

select * from examination_ophthalmic_history inner join ophthalmic_history on examination_ophthalmic_history.ophthalmic_history_id=ophthalmic_history.ophthalmic_history_id where examination_id=27 
 Execution Time:0.00078201293945312

select * from examination_medical_history inner join medical_history on examination_medical_history.medical_history_id=medical_history.medical_history_id where examination_id=27 
 Execution Time:0.00072717666625977

select * from examination_eye inner join eye_complaints on eye_complaints.eye_complaints_id=examination_eye.eye_complaints_id where examination_id=27 
 Execution Time:0.00042891502380371

select medicine_prescription.medicine_id,medicine.name as drugname,instruction,nodays,qty,sdate as ssdate,DATE_FORMAT(sdate,'%d/%m/%Y') AS sdate,DATE_FORMAT(tdate,'%d/%m/%Y') AS tdate,tdate as ttdate,med_eye from medicine_prescription inner join medicine on medicine_prescription.medicine_id=medicine.medicine_id where medicine_prescription.examination_id='27' and office_id='1' 
 Execution Time:0.00085902214050293

select * from examination_chargesdetails where  examination_id= '27' 
 Execution Time:0.00051212310791016

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00020980834960938

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00013494491577148

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00064682960510254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039708614349365

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039708614349365

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039708614349365

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039708614349365

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039708614349365

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013809204101562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013818740844727


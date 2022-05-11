select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022039413452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055813789367676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047922134399414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select * from office where  office_id= '1' 
 Execution Time:0.00074481964111328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001011848449707

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0006711483001709

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.0039582252502441

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.0054340362548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013848066329956

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013848066329956

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014558076858521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013848066329956

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014558076858521

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.015811920166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013848066329956

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014558076858521

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.015811920166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037798881530762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013848066329956

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014558076858521

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.015811920166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037798881530762

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030989646911621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013848066329956

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014558076858521

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.015811920166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037798881530762

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030989646911621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013848066329956

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014558076858521

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.015811920166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037798881530762

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030989646911621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075411796569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.013848066329956

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014558076858521

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.015811920166016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037798881530762

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030989646911621

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092196464538574

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075411796569824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0038759708404541

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0038759708404541

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0046520233154297

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0048007965087891

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0048007965087891

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0040881633758545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045919418334961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058412551879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0037989616394043

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0037989616394043

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0039801597595215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042891502380371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042891502380371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042891502380371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013198852539062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011849403381348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029971599578857

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042891502380371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013198852539062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00074887275695801

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0030021667480469

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0030021667480469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015530586242676

select count(*) as cnt from patient_registration where  patient_registration_id= '2' and  office_id= '1' 
 Execution Time:0.0030021667480469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015530586242676

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2' and  office_id= '1' 
 Execution Time:0.0040528774261475

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0035150051116943

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0035150051116943

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0038788318634033

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='86' and  office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_followup where  patient_registration_id = '86' and patient_followup_date='2022-01-14' and office_id= '1' 
 Execution Time:0.0040521621704102

select count(*) as cnt from patient_followup where  patient_registration_id = '86' and patient_followup_date='2022-01-14' and office_id= '1' 
 Execution Time:0.00078892707824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041103363037109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00036978721618652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039060115814209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039060115814209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021600723266602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039060115814209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021600723266602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014090538024902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039060115814209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021600723266602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014090538024902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039060115814209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021600723266602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014090538024902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0031640529632568

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026249885559082

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00043416023254395

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00043416023254395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.0006101131439209

select count(*) as cnt from patient_registration where  patient_registration_id= '5' and  office_id= '1' 
 Execution Time:0.00043416023254395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='5' and  doctors_registration.office_id= '1' 
 Execution Time:0.0006101131439209

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='5' and  office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031518936157227

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031518936157227

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012879371643066

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.0033929347991943

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003248929977417

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003248929977417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003248929977417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029449462890625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003248929977417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029449462890625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0064430236816406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003248929977417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029449462890625

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0064430236816406

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0030660629272461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014380931854248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014380931854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014380931854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003774881362915

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014380931854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003774881362915

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014380931854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003774881362915

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014380931854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003774881362915

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037360191345215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043230056762695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002918004989624

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.014380931854248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040299892425537

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003774881362915

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037360191345215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044269561767578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040750503540039

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044269561767578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040750503540039

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037031173706055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0044269561767578

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0040750503540039

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037031173706055

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 86 
 Execution Time:0.0033669471740723

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 121 
 Execution Time:0.00088310241699219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010139942169189

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038020610809326

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 86 
 Execution Time:0.00040221214294434

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 121 
 Execution Time:0.00057888031005859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059914588928223

select * from examination where examination_id= '52' and   office_id= '1' 
 Execution Time:0.0012040138244629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 52 
 Execution Time:0.038275957107544

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.0095250606536865

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010180473327637

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010180473327637

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00067400932312012

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.11134910583496

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='6' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00059390068054199

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 86 
 Execution Time:0.00043487548828125

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 121 
 Execution Time:0.00034594535827637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select * from examination where examination_id= '52' and   office_id= '1' 
 Execution Time:0.00099706649780273

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 52 
 Execution Time:0.00041604042053223

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.00037908554077148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010499954223633

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010499954223633

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00096702575683594

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.007378101348877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.007378101348877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035409927368164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.007378101348877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037140846252441

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 86 
 Execution Time:0.002418041229248

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 121 
 Execution Time:0.0036489963531494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0064289569854736

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0064289569854736

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0074930191040039

select * from examination where examination_id= '52' and   office_id= '1' 
 Execution Time:0.00087714195251465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 52 
 Execution Time:0.0003058910369873

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.00018191337585449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 86 
 Execution Time:0.00036001205444336

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 121 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064611434936523

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00064611434936523

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038504600524902

select * from examination where examination_id= '52' and   office_id= '1' 
 Execution Time:0.00092792510986328

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071620941162109

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 52 
 Execution Time:0.0004580020904541

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.00060915946960449

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 86 
 Execution Time:0.0003819465637207

SELECT *
FROM `patient_appointment`
WHERE `patient_appointment_id` = 121 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select * from examination where examination_id= '52' and   office_id= '1' 
 Execution Time:0.0066690444946289

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0032870769500732

select eye_complaints_id,lefteye,righteye from  examination_eye where  examination_id= 52 
 Execution Time:0.0026299953460693

select * from examination_chargesdetails where  examination_id= '52' 
 Execution Time:0.00092196464538574

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022280216217041

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022280216217041

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069079399108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069079399108887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069079399108887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069079399108887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050539970397949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069079399108887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050539970397949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013649463653564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069079399108887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050539970397949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013649463653564

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069079399108887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050539970397949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013649463653564

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037300586700439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069079399108887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050539970397949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013649463653564

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037300586700439

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012428760528564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0069079399108887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025389194488525

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0050539970397949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013649463653564

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0019769668579102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037300586700439

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012428760528564

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004472017288208

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00062704086303711

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00062704086303711

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0035078525543213

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.0035078525543213

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023300647735596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023300647735596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062670707702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023300647735596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062670707702637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037338733673096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047259330749512

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038409233093262

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024290084838867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023300647735596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0062670707702637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037338733673096

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038118362426758

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.006309986114502

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.006309986114502

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0077569484710693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039069652557373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039069652557373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024528503417969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039069652557373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024528503417969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034239292144775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039069652557373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024528503417969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034239292144775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039069652557373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024528503417969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034239292144775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017731189727783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039069652557373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024528503417969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034239292144775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017731189727783

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0060927867889404

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039069652557373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024528503417969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034239292144775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017731189727783

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0060927867889404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039069652557373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024528503417969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034239292144775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017731189727783

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0060927867889404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033299922943115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0039069652557373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024528503417969

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0034239292144775

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025398731231689

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017731189727783

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0060927867889404

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033299922943115

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046801567077637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043511390686035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065493583679199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00060510635375977

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00060510635375977

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039815902709961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00061583518981934

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0010030269622803

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0010030269622803

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030407905578613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030407905578613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030407905578613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030407905578613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018761157989502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030407905578613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018761157989502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027189254760742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030407905578613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018761157989502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027189254760742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027811527252197

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030407905578613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018761157989502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027189254760742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027811527252197

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024981498718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030407905578613

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0024521350860596

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018761157989502

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027189254760742

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027811527252197

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024981498718262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040421485900879

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00095796585083008

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00095796585083008

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.001140832901001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005382776260376

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005382776260376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039539337158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005382776260376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039539337158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005382776260376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039539337158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005382776260376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039539337158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025570392608643

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005382776260376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039539337158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025570392608643

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020818710327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005382776260376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039539337158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025570392608643

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020818710327148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005382776260376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039539337158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025570392608643

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020818710327148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017378330230713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.005382776260376

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039539337158203

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037920475006104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0025570392608643

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020818710327148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017378330230713

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039138793945312

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00062203407287598

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00062203407287598

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0028002262115479

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0028002262115479

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0060799121856689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027351379394531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027351379394531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020589828491211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027351379394531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020589828491211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027351379394531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020589828491211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027351379394531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020589828491211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013291835784912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014009475708008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026090145111084

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027351379394531

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020589828491211

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013291835784912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011579990386963

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0059621334075928

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0059621334075928

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014228820800781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014228820800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014228820800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014228820800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014228820800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061583518981934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014228820800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061583518981934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021381378173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014228820800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061583518981934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021381378173828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017049312591553

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014228820800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061583518981934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021381378173828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017049312591553

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017399787902832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014228820800781

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00084590911865234

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0007622241973877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072979927062988

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00061583518981934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021381378173828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017049312591553

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017399787902832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00039291381835938

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002598762512207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037598609924316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.001723051071167

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.001723051071167

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.0034561157226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042190551757812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042190551757812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012879371643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042190551757812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012879371643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042190551757812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012879371643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040459632873535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042190551757812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012879371643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040459632873535

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010101795196533

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0021989345550537

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009608268737793

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0015649795532227

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0042190551757812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012879371643066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001183032989502

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0040459632873535

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010101795196533

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036277770996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020861625671387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020861625671387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020861625671387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020861625671387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070810317993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020861625671387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039386749267578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070810317993164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044703483581543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026583671569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026583671569824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026583671569824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029151439666748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026583671569824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029151439666748

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082707405090332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026583671569824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029151439666748

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082707405090332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026583671569824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029151439666748

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082707405090332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055718421936035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055718421936035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082111358642578

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00063991546630859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053811073303223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055718421936035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035622119903564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035622119903564

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035622119903564

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035622119903564

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0051069259643555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035622119903564

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0051069259643555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035281181335449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035622119903564

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0051069259643555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035281181335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028312206268311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035622119903564

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0051069259643555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035281181335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028312206268311

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026781558990479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035622119903564

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0051069259643555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035281181335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028312206268311

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026781558990479

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043752193450928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034708976745605

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035622119903564

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0024969577789307

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019609928131104

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0051069259643555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035281181335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028312206268311

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026781558990479

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043752193450928

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047993659973145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047993659973145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047993659973145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047993659973145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070500373840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042529106140137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047993659973145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070500373840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042529106140137

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023388862609863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00017786026000977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016403198242188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023388862609863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00019621849060059

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00062894821166992

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00062894821166992

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00023818016052246

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00046610832214355

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00046610832214355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057411193847656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051999092102051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057411193847656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028705596923828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015497207641602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028705596923828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0001990795135498

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00049996376037598

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '14' and office_id= '1' 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049185752868652

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026607513427734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036811828613281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036811828613281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036811828613281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036811828613281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036811828613281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058197975158691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00062012672424316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00032901763916016

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00060606002807617

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00060606002807617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021431446075439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021431446075439

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021431446075439

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021431446075439

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037970542907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021431446075439

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037970542907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051031112670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0021431446075439

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003352165222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037970542907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051031112670898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00096416473388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019609928131104

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019609928131104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015978813171387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019609928131104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015978813171387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0078010559082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019609928131104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015978813171387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0078010559082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017831325531006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019609928131104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015978813171387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0078010559082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017831325531006

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030949115753174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038220882415771

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018148422241211

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.0037949085235596

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019609928131104

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015978813171387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0078010559082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017831325531006

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030949115753174

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select count(*) as cnt from patient_title where  patient_title_id = '23' and office_id= '1' 
 Execution Time:0.0036859512329102

select count(*) as cnt from patient_title where  patient_title_id = '23' and office_id= '1' 
 Execution Time:0.0036859512329102

select gender from patient_title where  patient_title_id = '23' and office_id= '1' 
 Execution Time:0.0038719177246094

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0014939308166504

select count(*) as cnt from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0014939308166504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '13' and office_id= '1' 
 Execution Time:0.0009160041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031590461730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select source_id,name from source where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017213821411133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031590461730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041


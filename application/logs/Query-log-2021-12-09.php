select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022189617156982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022189617156982

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022189617156982

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022900104522705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022189617156982

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022900104522705

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021159648895264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022189617156982

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022900104522705

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021159648895264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022189617156982

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022900104522705

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021159648895264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025320053100586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024900436401367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022189617156982

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025110244750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022900104522705

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021159648895264

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025320053100586

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040578842163086

select count(*) as cnt from patient_registration where  patient_registration_id= '3163' and  office_id= '1' 
 Execution Time:0.00079798698425293

select count(*) as cnt from patient_registration where  patient_registration_id= '3163' and  office_id= '1' 
 Execution Time:0.00079798698425293

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3163' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051000118255615

select count(*) as cnt from patient_registration where  patient_registration_id= '3163' and  office_id= '1' 
 Execution Time:0.00079798698425293

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3163' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051000118255615

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3163' and  office_id= '1' 
 Execution Time:0.00032901763916016

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044798851013184

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044798851013184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002892017364502

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00078988075256348

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00078988075256348

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.005850076675415

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00078988075256348

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.005850076675415

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1618' and  office_id= '1' 
 Execution Time:0.00044703483581543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034689903259277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034689903259277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00017094612121582

select count(*) as cnt from patient_registration where  patient_registration_id= '3084' and  office_id= '1' 
 Execution Time:0.00030303001403809

select count(*) as cnt from patient_registration where  patient_registration_id= '3084' and  office_id= '1' 
 Execution Time:0.00030303001403809

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3084' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051419734954834

select count(*) as cnt from patient_registration where  patient_registration_id= '3084' and  office_id= '1' 
 Execution Time:0.00030303001403809

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3084' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051419734954834

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3084' and  office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066685676574707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066685676574707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066494941711426

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.00034785270690918

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.00034785270690918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3174' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031478404998779

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.00034785270690918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3174' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031478404998779

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3174' and  office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00073409080505371

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00073409080505371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058197975158691

select count(*) as cnt from patient_registration where  patient_registration_id= '3143' and  office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from patient_registration where  patient_registration_id= '3143' and  office_id= '1' 
 Execution Time:0.00033807754516602

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3143' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050690174102783

select count(*) as cnt from patient_registration where  patient_registration_id= '3143' and  office_id= '1' 
 Execution Time:0.00033807754516602

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3143' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050690174102783

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3143' and  office_id= '1' 
 Execution Time:0.0032410621643066

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038313865661621

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038313865661621

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025606155395508

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044012069702148

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from patient_registration where  patient_registration_id= '3141' and  office_id= '1' 
 Execution Time:0.00052785873413086

select count(*) as cnt from patient_registration where  patient_registration_id= '3141' and  office_id= '1' 
 Execution Time:0.00052785873413086

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3141' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041110515594482

select count(*) as cnt from patient_registration where  patient_registration_id= '3141' and  office_id= '1' 
 Execution Time:0.00052785873413086

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3141' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041110515594482

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3141' and  office_id= '1' 
 Execution Time:0.00026988983154297

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00071001052856445

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00071001052856445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043797492980957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029802322387695

select count(*) as cnt from patient_registration where  patient_registration_id= '3083' and  office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from patient_registration where  patient_registration_id= '3083' and  office_id= '1' 
 Execution Time:0.00041699409484863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3083' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029361248016357

select count(*) as cnt from patient_registration where  patient_registration_id= '3083' and  office_id= '1' 
 Execution Time:0.00041699409484863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3083' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029361248016357

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3083' and  office_id= '1' 
 Execution Time:0.00025105476379395

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050497055053711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.00033688545227051

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.00033688545227051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3003' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029838085174561

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.00033688545227051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3003' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029838085174561

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3003' and  office_id= '1' 
 Execution Time:0.00025486946105957

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032711029052734

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from patient_registration where  patient_registration_id= '3141' and  office_id= '1' 
 Execution Time:0.00035905838012695

select count(*) as cnt from patient_registration where  patient_registration_id= '3141' and  office_id= '1' 
 Execution Time:0.00035905838012695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3141' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056548118591309

select count(*) as cnt from patient_registration where  patient_registration_id= '3141' and  office_id= '1' 
 Execution Time:0.00035905838012695

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3141' and  doctors_registration.office_id= '1' 
 Execution Time:0.0056548118591309

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3141' and  office_id= '1' 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053000450134277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060486793518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062041282653809

select count(*) as cnt from patient_registration where  patient_registration_id= '3242' and  office_id= '1' 
 Execution Time:0.00050616264343262

select count(*) as cnt from patient_registration where  patient_registration_id= '3242' and  office_id= '1' 
 Execution Time:0.00050616264343262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3242' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030069351196289

select count(*) as cnt from patient_registration where  patient_registration_id= '3242' and  office_id= '1' 
 Execution Time:0.00050616264343262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3242' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030069351196289

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3242' and  office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055980682373047

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055980682373047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00021719932556152

select count(*) as cnt from patient_registration where  patient_registration_id= '3204' and  office_id= '1' 
 Execution Time:0.00085186958312988

select count(*) as cnt from patient_registration where  patient_registration_id= '3204' and  office_id= '1' 
 Execution Time:0.00085186958312988

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0060310363769531

select count(*) as cnt from patient_registration where  patient_registration_id= '3204' and  office_id= '1' 
 Execution Time:0.00085186958312988

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0060310363769531

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3204' and  office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056910514831543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056910514831543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002281665802002

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00099301338195801

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00099301338195801

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086808204650879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086808204650879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083684921264648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004429817199707

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083684921264648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062050819396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00095081329345703

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064706802368164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046801567077637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065207481384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063600540161133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047979354858398

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047979354858398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047979354858398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032119750976562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047979354858398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032119750976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047979354858398

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010449886322021

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032119750976562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0026400089263916

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.0005948543548584

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.0005948543548584

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3174' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055930614471436

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.0005948543548584

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3174' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055930614471436

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3174' and  office_id= '1' 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059819221496582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043988227844238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044498443603516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041708946228027

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041708946228027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041708946228027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041708946228027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041708946228027

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00357985496521

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.00042200088500977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3174' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030219554901123

select count(*) as cnt from patient_registration where  patient_registration_id= '3174' and  office_id= '1' 
 Execution Time:0.00042200088500977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3174' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030219554901123

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3174' and  office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028672218322754

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0028672218322754

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00055384635925293

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00065112113952637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003964900970459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00047111511230469

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_registration where  patient_registration_id= '3163' and  office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from patient_registration where  patient_registration_id= '3163' and  office_id= '1' 
 Execution Time:0.00052809715270996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3163' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051100254058838

select count(*) as cnt from patient_registration where  patient_registration_id= '3163' and  office_id= '1' 
 Execution Time:0.00052809715270996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3163' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051100254058838

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3163' and  office_id= '1' 
 Execution Time:0.00045514106750488

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014181137084961

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0014181137084961

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0003659725189209

select * from ipdcharge where  ipdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00096702575683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026230812072754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026230812072754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026230812072754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035059452056885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026230812072754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035059452056885

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026230812072754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035059452056885

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026230812072754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035059452056885

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026230812072754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035059452056885

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067629814147949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031781196594238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034880638122559

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063610076904297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.009807825088501

select count(*) as cnt from patient_registration where  patient_registration_id= '3079' and  office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from patient_registration where  patient_registration_id= '3079' and  office_id= '1' 
 Execution Time:0.00042104721069336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3079' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048108100891113

select count(*) as cnt from patient_registration where  patient_registration_id= '3079' and  office_id= '1' 
 Execution Time:0.00042104721069336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3079' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048108100891113

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3079' and  office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038909912109375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00017714500427246

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0047190189361572

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0047190189361572

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033390522003174

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033390522003174

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031330585479736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032169818878174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032169818878174

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003201961517334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045609474182129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032169818878174

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003201961517334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0089619159698486

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065782070159912

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065782070159912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065782070159912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065782070159912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065782070159912

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006709098815918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00082898139953613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034499168395996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063991546630859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004317045211792

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066230297088623

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066230297088623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066230297088623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066230297088623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066230297088623

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033848285675049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033848285675049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033848285675049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029962062835693

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033848285675049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029962062835693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035941600799561

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033848285675049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029962062835693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035941600799561

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022711753845215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033848285675049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029962062835693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035941600799561

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022711753845215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033848285675049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029962062835693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035941600799561

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022711753845215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037569999694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033848285675049

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039191246032715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029962062835693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035941600799561

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022711753845215

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023469924926758

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037569999694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010117053985596

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002227783203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002227783203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025351047515869

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002227783203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025351047515869

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002227783203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025351047515869

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035529136657715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009150505065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037131309509277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.002227783203125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025351047515869

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035529136657715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0092489719390869

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010362863540649

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010362863540649

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043199062347412

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010362863540649

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043199062347412

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029897689819336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010362863540649

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043199062347412

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0036671161651611

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010362863540649

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0043199062347412

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0036671161651611

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0025169849395752

select count(*) as cnt from patient_registration where  patient_registration_id= '3079' and  office_id= '1' 
 Execution Time:0.0031759738922119

select count(*) as cnt from patient_registration where  patient_registration_id= '3079' and  office_id= '1' 
 Execution Time:0.0031759738922119

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3079' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057871341705322

select count(*) as cnt from patient_registration where  patient_registration_id= '3079' and  office_id= '1' 
 Execution Time:0.0031759738922119

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3079' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057871341705322

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3079' and  office_id= '1' 
 Execution Time:0.0037789344787598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.040206909179688

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.040206909179688

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049901008605957

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.0024139881134033

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085089206695557

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085089206695557

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002025842666626

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085089206695557

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002025842666626

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028431415557861

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085089206695557

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002025842666626

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028431415557861

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085089206695557

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002025842666626

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028431415557861

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0037779808044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057005882263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057005882263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057005882263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0011751651763916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057005882263184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050806999206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076289176940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0092241764068604

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0092241764068604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0092241764068604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0092241764068604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0092241764068604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0092241764068604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080299377441406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0092241764068604

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066959857940674

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065498352050781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065498352050781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065498352050781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065498352050781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065498352050781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078010559082031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00079607963562012

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00045204162597656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052988529205322

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00045204162597656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052988529205322

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1618' and  office_id= '1' 
 Execution Time:0.00038981437683105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043296813964844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043296813964844

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040912628173828

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00086379051208496

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00086379051208496

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.002810001373291

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.00058507919311523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047829151153564

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047829151153564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047829151153564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047829151153564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047829151153564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047829151153564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047829151153564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0047829151153564

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027203559875488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065112113952637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058679580688477

select count(*) as cnt from patient_registration where  patient_registration_id= '2762' and  office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from patient_registration where  patient_registration_id= '2762' and  office_id= '1' 
 Execution Time:0.00040793418884277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2762' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028619766235352

select count(*) as cnt from patient_registration where  patient_registration_id= '2762' and  office_id= '1' 
 Execution Time:0.00040793418884277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2762' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028619766235352

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2762' and  office_id= '1' 
 Execution Time:0.00027084350585938

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046491622924805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046491622924805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00021100044250488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070340633392334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070340633392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070340633392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070340633392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070340633392334

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00053596496582031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052499771118164

select count(*) as cnt from patient_registration where  patient_registration_id= '1618' and  office_id= '1' 
 Execution Time:0.00053596496582031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1618' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052499771118164

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1618' and  office_id= '1' 
 Execution Time:0.00033879280090332

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074005126953125

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00074005126953125

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043988227844238

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.00035309791564941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045690536499023

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045690536499023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045690536499023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045690536499023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045690536499023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039079189300537

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070810317993164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00070810317993164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034093856811523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055623054504395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055623054504395

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030612945556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004270076751709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059199333190918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045340061187744

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00025510787963867

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029561519622803

select count(*) as cnt from patient_registration where  patient_registration_id= '2753' and  office_id= '1' 
 Execution Time:0.00025510787963867

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2753' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029561519622803

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2753' and  office_id= '1' 
 Execution Time:0.00028085708618164

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028514862060547

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022411346435547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066521167755127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066521167755127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066521167755127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066521167755127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066521167755127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.00055694580078125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3003' and  doctors_registration.office_id= '1' 
 Execution Time:0.014119863510132

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.00055694580078125

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3003' and  doctors_registration.office_id= '1' 
 Execution Time:0.014119863510132

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3003' and  office_id= '1' 
 Execution Time:0.0006098747253418

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078892707824707

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00078892707824707

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001288890838623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001288890838623

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001288890838623

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001288890838623

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001288890838623

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001168966293335

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001288890838623

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096583366394043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005650520324707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006788969039917

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016379356384277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016379356384277

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061893463134766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007544994354248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007544994354248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007544994354248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007544994354248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007544994354248

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038509368896484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0039479732513428

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00093913078308105

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00370192527771

select count(*) as cnt from patient_registration where  patient_registration_id= '3083' and  office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from patient_registration where  patient_registration_id= '3083' and  office_id= '1' 
 Execution Time:0.00053596496582031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3083' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057418346405029

select count(*) as cnt from patient_registration where  patient_registration_id= '3083' and  office_id= '1' 
 Execution Time:0.00053596496582031

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3083' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057418346405029

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3083' and  office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031960010528564

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031960010528564

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004889965057373

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087881088256836

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00087881088256836

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00045204162597656

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0034749507904053

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.0032930374145508

select * from ipdcharge where  ipdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.0073261260986328

select * from ipdcharge where  ipdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.013113975524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093510150909424

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093510150909424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093510150909424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093510150909424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093510150909424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039949417114258

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0028109550476074

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0034000873565674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049870014190674

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012760162353516

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012760162353516

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0044372081756592

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090980529785156

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090980529785156

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028328895568848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095605850219727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054788589477539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023317337036133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095605850219727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061020851135254

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033783912658691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057888031005859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057888031005859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087380409240723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087380409240723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087380409240723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087380409240723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087380409240723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087380409240723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087380409240723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087380409240723

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025200843811035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050687789916992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003993034362793

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031113624572754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005030632019043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035920143127441

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042009353637695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068187713623047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077149868011475

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049304962158203

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019910335540771

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019910335540771

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064682960510254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036787986755371

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047588348388672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052611827850342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040888786315918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037839412689209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040171146392822

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022387504577637

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042538642883301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042538642883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042538642883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042538642883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042538642883301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select count(*) as cnt from patient_registration where  patient_registration_id= '3306' and  office_id= '1' 
 Execution Time:0.00048208236694336

select count(*) as cnt from patient_registration where  patient_registration_id= '3306' and  office_id= '1' 
 Execution Time:0.00048208236694336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3306' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051670074462891

select count(*) as cnt from patient_registration where  patient_registration_id= '3306' and  office_id= '1' 
 Execution Time:0.00048208236694336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3306' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051670074462891

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3306' and  office_id= '1' 
 Execution Time:0.00073909759521484

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078487396240234

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00078487396240234

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00048589706420898

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00055503845214844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060207843780518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060207843780518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060207843780518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060207843780518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032210350036621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060207843780518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032210350036621

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0044929981231689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027322769165039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027322769165039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030429363250732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027322769165039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030429363250732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027322769165039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030429363250732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013229846954346

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027322769165039

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030429363250732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043606758117676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064241886138916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004040002822876

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004040002822876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004040002822876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004040002822876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004040002822876

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select count(*) as cnt from patient_registration where  patient_registration_id= '3307' and  office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from patient_registration where  patient_registration_id= '3307' and  office_id= '1' 
 Execution Time:0.00032496452331543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3307' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047571659088135

select count(*) as cnt from patient_registration where  patient_registration_id= '3307' and  office_id= '1' 
 Execution Time:0.00032496452331543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3307' and  doctors_registration.office_id= '1' 
 Execution Time:0.0047571659088135

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3307' and  office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077605247497559

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00077605247497559

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00043702125549316

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00037503242492676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045559406280518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045559406280518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045559406280518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045559406280518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045559406280518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020599365234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037384033203125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0055670738220215

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062012672424316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062012672424316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040316581726074

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040316581726074

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000244140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000244140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000244140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029587745666504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.000244140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061409473419189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061607360839844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024580955505371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025701522827148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0045828819274902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065939426422119

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065939426422119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065939426422119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036211013793945

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065939426422119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036211013793945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065939426422119

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084996223449707

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0036211013793945

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00091218948364258

select count(*) as cnt from patient_registration where  patient_registration_id= '3084' and  office_id= '1' 
 Execution Time:0.00055289268493652

select count(*) as cnt from patient_registration where  patient_registration_id= '3084' and  office_id= '1' 
 Execution Time:0.00055289268493652

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3084' and  doctors_registration.office_id= '1' 
 Execution Time:0.004464864730835

select count(*) as cnt from patient_registration where  patient_registration_id= '3084' and  office_id= '1' 
 Execution Time:0.00055289268493652

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3084' and  doctors_registration.office_id= '1' 
 Execution Time:0.004464864730835

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3084' and  office_id= '1' 
 Execution Time:0.00026106834411621

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063300132751465

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00063300132751465

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00033903121948242

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033469200134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033469200134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033469200134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033469200134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084900856018066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033469200134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084900856018066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033469200134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084900856018066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033469200134277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00084900856018066

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064220428466797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044341087341309

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044341087341309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044341087341309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015039443969727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044341087341309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015039443969727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044341087341309

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080084800720215

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015039443969727

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select count(*) as cnt from patient_registration where  patient_registration_id= '3084' and  office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from patient_registration where  patient_registration_id= '3084' and  office_id= '1' 
 Execution Time:0.0004420280456543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3084' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054299831390381

select count(*) as cnt from patient_registration where  patient_registration_id= '3084' and  office_id= '1' 
 Execution Time:0.0004420280456543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3084' and  doctors_registration.office_id= '1' 
 Execution Time:0.0054299831390381

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3084' and  office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046610832214355

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00046610832214355

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028109550476074

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.00049519538879395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030398368835449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065639019012451

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065310001373291

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065310001373291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065310001373291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018038749694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065310001373291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018038749694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065310001373291

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0018038749694824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select count(*) as cnt from patient_registration where  patient_registration_id= '3084' and  office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from patient_registration where  patient_registration_id= '3084' and  office_id= '1' 
 Execution Time:0.0004429817199707

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3084' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029969215393066

select count(*) as cnt from patient_registration where  patient_registration_id= '3084' and  office_id= '1' 
 Execution Time:0.0004429817199707

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3084' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029969215393066

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3084' and  office_id= '1' 
 Execution Time:0.0003211498260498

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010089874267578

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0010089874267578

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.00059080123901367

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.00079917907714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012600421905518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012600421905518

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012600421905518

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043480396270752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012600421905518

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00048518180847168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018787384033203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048184394836426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048990249633789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069689750671387

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069689750671387

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052118301391602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069212913513184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036501884460449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052118301391602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041658878326416

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043797492980957

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026392936706543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038003921508789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023412704467773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090885162353516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090885162353516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090885162353516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090885162353516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090885162353516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002694845199585

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085687637329102

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015799999237061

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090885162353516

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028395652770996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002694845199585

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054409503936768

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023889541625977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041890144348145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062210559844971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019216537475586

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031113624572754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066909790039062

select count(*) as cnt from patient_registration where  patient_registration_id= '3078' and  office_id= '1' 
 Execution Time:0.00074100494384766

select count(*) as cnt from patient_registration where  patient_registration_id= '3078' and  office_id= '1' 
 Execution Time:0.00074100494384766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3078' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030760765075684

select count(*) as cnt from patient_registration where  patient_registration_id= '3078' and  office_id= '1' 
 Execution Time:0.00074100494384766

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3078' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030760765075684

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3078' and  office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00074291229248047

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00074291229248047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025660991668701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025660991668701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025660991668701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025660991668701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025660991668701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025660991668701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025660991668701

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053000450134277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061702728271484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061409473419189

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003572940826416

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003572940826416

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079798698425293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00079798698425293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002591609954834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019121170043945

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019121170043945

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019121170043945

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019121170043945

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005648136138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019121170043945

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036501884460449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052740573883057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041818618774414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002901554107666

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041818618774414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060591697692871

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034117698669434

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034117698669434

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029921531677246

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035998821258545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035998821258545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035998821258545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064992904663086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035998821258545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064992904663086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035998821258545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064992904663086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029430389404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031819343566895

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0043010711669922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0035998821258545

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00064992904663086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039641857147217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037739276885986

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0029430389404297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068421363830566

select count(*) as cnt from patient_registration where  patient_registration_id= '2773' and  office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from patient_registration where  patient_registration_id= '2773' and  office_id= '1' 
 Execution Time:0.00046300888061523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2773' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029871463775635

select count(*) as cnt from patient_registration where  patient_registration_id= '2773' and  office_id= '1' 
 Execution Time:0.00046300888061523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2773' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029871463775635

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2773' and  office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075292587280273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00075292587280273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from patient_registration where  patient_registration_id= '3055' and  office_id= '1' 
 Execution Time:0.0008690357208252

select count(*) as cnt from patient_registration where  patient_registration_id= '3055' and  office_id= '1' 
 Execution Time:0.0008690357208252

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3055' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057108402252197

select count(*) as cnt from patient_registration where  patient_registration_id= '3055' and  office_id= '1' 
 Execution Time:0.0008690357208252

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3055' and  doctors_registration.office_id= '1' 
 Execution Time:0.0057108402252197

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3055' and  office_id= '1' 
 Execution Time:0.00086498260498047

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.005579948425293

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.005579948425293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0038409233093262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097789764404297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097789764404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097789764404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097789764404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097789764404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select count(*) as cnt from patient_registration where  patient_registration_id= '3204' and  office_id= '1' 
 Execution Time:0.00093197822570801

select count(*) as cnt from patient_registration where  patient_registration_id= '3204' and  office_id= '1' 
 Execution Time:0.00093197822570801

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055170059204102

select count(*) as cnt from patient_registration where  patient_registration_id= '3204' and  office_id= '1' 
 Execution Time:0.00093197822570801

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3204' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055170059204102

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3204' and  office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012121200561523

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0012121200561523

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0005190372467041

select * from ipdcharge where  ipdcharge_id=5  and office_id= 1 and status=1 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006699800491333

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006699800491333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010792016983032

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006699800491333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010792016983032

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0058579444885254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006699800491333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010792016983032

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0058579444885254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0014901161193848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006699800491333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010792016983032

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0058579444885254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0014901161193848

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042891502380371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071382522583008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023603439331055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042891502380371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0057179927825928

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038959980010986

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027585029602051

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068187713623047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042641162872314

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063705444335938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063705444335938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077009201049805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00077009201049805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059819221496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067281723022461

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049281120300293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040578842163086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059819221496582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063531398773193

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051689147949219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051689147949219

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022792816162109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081992149353027

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00081992149353027

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0017499923706055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074505805969238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074505805969238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032880306243896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032880306243896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030040740966797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032880306243896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030040740966797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020580291748047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032880306243896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030040740966797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020580291748047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025851726531982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071287155151367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013008117675781

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0032880306243896

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0030040740966797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0020580291748047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0025851726531982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0093770027160645

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048422813415527

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048422813415527

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034308433532715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050210952758789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050210952758789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063991546630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065422058105469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023579597473145

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063991546630859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0056869983673096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059890747070312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050783157348633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005948543548584

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059103965759277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069458484649658

select count(*) as cnt from patient_registration where  patient_registration_id= '2862' and  office_id= '1' 
 Execution Time:0.00076389312744141

select count(*) as cnt from patient_registration where  patient_registration_id= '2862' and  office_id= '1' 
 Execution Time:0.00076389312744141

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2862' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052080154418945

select count(*) as cnt from patient_registration where  patient_registration_id= '2862' and  office_id= '1' 
 Execution Time:0.00076389312744141

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2862' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052080154418945

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2862' and  office_id= '1' 
 Execution Time:0.00095200538635254

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0070290565490723

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0070290565490723

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0044460296630859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00080513954162598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062894821166992

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063395500183105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044810771942139

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071096420288086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033283233642578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00063085556030273

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060391426086426

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071096420288086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048739910125732

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058968067169189

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058968067169189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058968067169189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058968067169189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058968067169189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00087881088256836

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048303604125977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050091743469238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00080299377441406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063228607177734

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016131401062012

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016131401062012

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047802925109863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047802925109863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042080879211426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028085708618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037693977355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078439712524414

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029087066650391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013988018035889

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013988018035889

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011441707611084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011441707611084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011441707611084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009770393371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011441707611084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009770393371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011441707611084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009770393371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011441707611084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009770393371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012960433959961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001338005065918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011441707611084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0009770393371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012960433959961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011909961700439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026249885559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026249885559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017039775848389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026249885559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017039775848389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026249885559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017039775848389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026249885559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017039775848389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036759376525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026249885559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017039775848389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036759376525879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067081451416016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034642219543457

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026249885559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0017039775848389

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038790702819824

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036759376525879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0067081451416016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010395050048828

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054597854614258

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029778480529785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029778480529785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004122257232666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004122257232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004122257232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004122257232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038719177246094

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004122257232666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060770511627197

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006695032119751

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006695032119751

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006695032119751

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006695032119751

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006695032119751

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058078765869141

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_registration where  patient_registration_id= '3163' and  office_id= '1' 
 Execution Time:0.00033092498779297

select count(*) as cnt from patient_registration where  patient_registration_id= '3163' and  office_id= '1' 
 Execution Time:0.00033092498779297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3163' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045070648193359

select count(*) as cnt from patient_registration where  patient_registration_id= '3163' and  office_id= '1' 
 Execution Time:0.00033092498779297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3163' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045070648193359

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3163' and  office_id= '1' 
 Execution Time:0.0067980289459229

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00187087059021

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00187087059021

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0031349658966064

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00053000450134277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006112813949585

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006112813949585

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006112813949585

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006112813949585

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006112813949585

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058317184448242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089788436889648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022292137145996

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089788436889648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060980319976807

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035459995269775

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select count(*) as cnt from patient_registration where  patient_registration_id= '3163' and  office_id= '1' 
 Execution Time:0.00054097175598145

select count(*) as cnt from patient_registration where  patient_registration_id= '3163' and  office_id= '1' 
 Execution Time:0.00054097175598145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3163' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052039623260498

select count(*) as cnt from patient_registration where  patient_registration_id= '3163' and  office_id= '1' 
 Execution Time:0.00054097175598145

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3163' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052039623260498

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3163' and  office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016410350799561

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0016410350799561

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00043487548828125

select * from ipdcharge where  ipdcharge_id=6  and office_id= 1 and status=1 
 Execution Time:0.0006098747253418

select * from ipdcharge where  ipdcharge_id=7  and office_id= 1 and status=1 
 Execution Time:0.00039410591125488

select * from ipdcharge where  ipdcharge_id=8  and office_id= 1 and status=1 
 Execution Time:0.00056791305541992

select * from ipdcharge where  ipdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00061392784118652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005267858505249

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005267858505249

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005267858505249

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005267858505249

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005267858505249

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057816505432129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00060701370239258

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062100887298584

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062088966369629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062088966369629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062088966369629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062088966369629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062088966369629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066614151000977

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078606605529785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053977966308594

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.00039792060852051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3003' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053818225860596

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.00039792060852051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3003' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053818225860596

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3003' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0004270076751709

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00034117698669434

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.0012321472167969

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014770030975342

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014770030975342

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014770030975342

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014770030975342

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033190250396729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025968551635742

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001101016998291

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008080005645752

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0014770030975342

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031495094299316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033190250396729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094509124755859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067129135131836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067129135131836

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067129135131836

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063776969909668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067129135131836

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063776969909668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067129135131836

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00068998336791992

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063776969909668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select count(*) as cnt from patient_registration where  patient_registration_id= '3317' and  office_id= '1' 
 Execution Time:0.0061290264129639

select count(*) as cnt from patient_registration where  patient_registration_id= '3317' and  office_id= '1' 
 Execution Time:0.0061290264129639

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3317' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051381587982178

select count(*) as cnt from patient_registration where  patient_registration_id= '3317' and  office_id= '1' 
 Execution Time:0.0061290264129639

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3317' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051381587982178

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3317' and  office_id= '1' 
 Execution Time:0.003154993057251

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046896934509277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00046896934509277

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00038695335388184

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00075912475585938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066611766815186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066611766815186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066611766815186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066611766815186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066611766815186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041079521179199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074410438537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043296813964844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033116340637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029330253601074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074410438537598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095779895782471

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00044107437133789

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00044107437133789

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085902214050293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078797340393066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061459541320801

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00036287307739258

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00036287307739258

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3101' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051758289337158

select count(*) as cnt from patient_registration where  patient_registration_id= '3101' and  office_id= '1' 
 Execution Time:0.00036287307739258

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3101' and  doctors_registration.office_id= '1' 
 Execution Time:0.0051758289337158

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3101' and  office_id= '1' 
 Execution Time:0.00086116790771484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016307830810547

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023293495178223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042679309844971

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061161518096924

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061161518096924

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061161518096924

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061161518096924

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061161518096924

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select count(*) as cnt from patient_registration where  patient_registration_id= '2773' and  office_id= '1' 
 Execution Time:0.00044989585876465

select count(*) as cnt from patient_registration where  patient_registration_id= '2773' and  office_id= '1' 
 Execution Time:0.00044989585876465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2773' and  doctors_registration.office_id= '1' 
 Execution Time:0.004723072052002

select count(*) as cnt from patient_registration where  patient_registration_id= '2773' and  office_id= '1' 
 Execution Time:0.00044989585876465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2773' and  doctors_registration.office_id= '1' 
 Execution Time:0.004723072052002

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='2773' and  office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030398368835449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00030398368835449

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00041007995605469

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095820426940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095820426940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032069683074951

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095820426940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032069683074951

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095820426940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032069683074951

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095820426940918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032069683074951

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025718212127686

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025718212127686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025718212127686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025718212127686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025718212127686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025718212127686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025718212127686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025718212127686

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014278888702393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040483474731445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006248950958252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065631866455078

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047183036804199

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047183036804199

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051307678222656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031399726867676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062909126281738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023479461669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023479461669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023479461669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023479461669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023479461669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023479461669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023479461669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023479461669922

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.001284122467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054941177368164

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070786476135254

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070786476135254

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0016241073608398

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011529922485352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011529922485352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026392936706543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064997673034668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071499347686768

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071499347686768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071499347686768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071499347686768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071499347686768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.0029349327087402

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.0029349327087402

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3003' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055809020996094

select count(*) as cnt from patient_registration where  patient_registration_id= '3003' and  office_id= '1' 
 Execution Time:0.0029349327087402

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3003' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055809020996094

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3003' and  office_id= '1' 
 Execution Time:0.0037829875946045

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038130283355713

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0038130283355713

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0031449794769287

select * from ipdcharge where  ipdcharge_id=4  and office_id= 1 and status=1 
 Execution Time:0.0029809474945068

select * from ipdcharge where  ipdcharge_id=3  and office_id= 1 and status=1 
 Execution Time:0.00065207481384277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073809623718262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073809623718262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073809623718262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073809623718262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0073809623718262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061488151550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032520294189453

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061488151550293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038549900054932

select count(*) as cnt from patient_registration where  patient_registration_id= '1873' and  office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from patient_registration where  patient_registration_id= '1873' and  office_id= '1' 
 Execution Time:0.00039005279541016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1873' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045371055603027

select count(*) as cnt from patient_registration where  patient_registration_id= '1873' and  office_id= '1' 
 Execution Time:0.00039005279541016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1873' and  doctors_registration.office_id= '1' 
 Execution Time:0.0045371055603027

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1873' and  office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008389949798584

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0008389949798584

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00046515464782715

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00046515464782715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0058560371398926

select count(*) as cnt from patient_registration where  patient_registration_id= '1760' and  office_id= '1' 
 Execution Time:0.00046515464782715

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1760' and  doctors_registration.office_id= '1' 
 Execution Time:0.0058560371398926

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1760' and  office_id= '1' 
 Execution Time:0.00079703330993652

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002741813659668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072369575500488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072369575500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072369575500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015931129455566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072369575500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015931129455566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038611888885498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072369575500488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0006108283996582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015931129455566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0038611888885498

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035595893859863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068600177764893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013308525085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013308525085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029449462890625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013308525085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029449462890625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013308525085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029449462890625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011708736419678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0013308525085449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029449462890625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016689300537109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012449026107788

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041699409484863

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035619735717773

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035619735717773

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.012778997421265

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063085556030273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023918151855469

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063085556030273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070919990539551

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054192543029785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054192543029785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054192543029785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070691108703613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038228034973145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044417381286621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054192543029785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078392028808594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070691108703613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066001415252686

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059890747070312

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059890747070312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057482719421387

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057482719421387

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063014030456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047183036804199

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033903121948242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057101249694824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006309986114502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096297264099121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00096702575683594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044608116149902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049018859863281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096297264099121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053849220275879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011169910430908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011169910430908

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011169910430908

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011169910430908

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095510482788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056314468383789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011169910430908

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039982795715332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095510482788086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065450668334961

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054001808166504

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020909309387207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037312507629395

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012350082397461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005500316619873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068528652191162

select count(*) as cnt from patient_registration where  patient_registration_id= '1476' and  office_id= '1' 
 Execution Time:0.0031671524047852

select count(*) as cnt from patient_registration where  patient_registration_id= '1476' and  office_id= '1' 
 Execution Time:0.0031671524047852

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1476' and  doctors_registration.office_id= '1' 
 Execution Time:0.0083560943603516

select count(*) as cnt from patient_registration where  patient_registration_id= '1476' and  office_id= '1' 
 Execution Time:0.0031671524047852

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1476' and  doctors_registration.office_id= '1' 
 Execution Time:0.0083560943603516

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='1476' and  office_id= '1' 
 Execution Time:0.004547119140625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021729469299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0021729469299316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017280578613281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007004976272583

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007004976272583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007004976272583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007004976272583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007004976272583

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066685676574707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016031265258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016031265258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016031265258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016031265258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016031265258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016031265258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016031265258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086092948913574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016031265258789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00076889991760254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049400329589844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072479248046875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086092948913574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052759647369385

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034308433532715

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034308433532715

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002601146697998

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016400814056396

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016400814056396

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039830207824707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050230026245117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050230026245117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088510513305664

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050230026245117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088510513305664

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050230026245117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088510513305664

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017611980438232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050230026245117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088510513305664

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017611980438232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023500919342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050230026245117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088510513305664

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017611980438232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023500919342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049960613250732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050230026245117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088510513305664

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017611980438232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023500919342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049960613250732

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019681453704834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0050230026245117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0088510513305664

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021610260009766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017611980438232

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023500919342041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0049960613250732

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019681453704834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.018572092056274

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007559061050415

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007559061050415

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045499801635742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007559061050415

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045499801635742

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032811164855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007559061050415

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045499801635742

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032811164855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007559061050415

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045499801635742

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032811164855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00075101852416992

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018329620361328

select count(*) as cnt from patient_registration where  patient_registration_id= '3322' and  office_id= '1' 
 Execution Time:0.00043678283691406

select count(*) as cnt from patient_registration where  patient_registration_id= '3322' and  office_id= '1' 
 Execution Time:0.00043678283691406

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3322' and  doctors_registration.office_id= '1' 
 Execution Time:0.006472110748291

select count(*) as cnt from patient_registration where  patient_registration_id= '3322' and  office_id= '1' 
 Execution Time:0.00043678283691406

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3322' and  doctors_registration.office_id= '1' 
 Execution Time:0.006472110748291

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3322' and  office_id= '1' 
 Execution Time:0.00099396705627441

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.020249128341675

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.020249128341675

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00051498413085938

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00074601173400879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008256196975708

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008256196975708

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008256196975708

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008256196975708

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032839775085449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.008256196975708

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.002979040145874

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00066590309143066

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0032839775085449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00094294548034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0048160552978516

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013949871063232

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0048160552978516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067329406738281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062441825866699

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062441825866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062441825866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062441825866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062441825866699

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0015170574188232

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select count(*) as cnt from patient_registration where  patient_registration_id= '3324' and  office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from patient_registration where  patient_registration_id= '3324' and  office_id= '1' 
 Execution Time:0.00031208992004395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3324' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028791427612305

select count(*) as cnt from patient_registration where  patient_registration_id= '3324' and  office_id= '1' 
 Execution Time:0.00031208992004395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3324' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028791427612305

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3324' and  office_id= '1' 
 Execution Time:0.00060415267944336

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060915946960449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00060915946960449

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042414665222168

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00084304809570312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091090202331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091090202331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023238658905029

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091090202331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023238658905029

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019001960754395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091090202331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023238658905029

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019001960754395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013282299041748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0091090202331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023238658905029

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019001960754395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0013282299041748

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023448467254639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010550022125244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010550022125244

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075011253356934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081319808959961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081319808959961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081319808959961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00090980529785156

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081319808959961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00090980529785156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081319808959961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010089874267578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00090980529785156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030479431152344

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030479431152344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030479431152344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042388439178467

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030479431152344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042388439178467

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001331090927124

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030479431152344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042388439178467

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001331090927124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030479431152344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042388439178467

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001331090927124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091695785522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0057339668273926

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030479431152344

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022239685058594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042388439178467

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.001331090927124

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017139911651611

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091695785522461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067150592803955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099396705627441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000640869140625

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011909008026123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046014785766602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099396705627441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067031383514404

select count(*) as cnt from patient_registration where  patient_registration_id= '3302' and  office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from patient_registration where  patient_registration_id= '3302' and  office_id= '1' 
 Execution Time:0.00053095817565918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3302' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052480697631836

select count(*) as cnt from patient_registration where  patient_registration_id= '3302' and  office_id= '1' 
 Execution Time:0.00053095817565918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3302' and  doctors_registration.office_id= '1' 
 Execution Time:0.0052480697631836

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3302' and  office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052189826965332

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052189826965332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from patient_registration where  patient_registration_id= '3303' and  office_id= '1' 
 Execution Time:0.00059413909912109

select count(*) as cnt from patient_registration where  patient_registration_id= '3303' and  office_id= '1' 
 Execution Time:0.00059413909912109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3303' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034170150756836

select count(*) as cnt from patient_registration where  patient_registration_id= '3303' and  office_id= '1' 
 Execution Time:0.00059413909912109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='3303' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034170150756836

select fname,lname,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from patient_registration where  patient_registration_id='3303' and  office_id= '1' 
 Execution Time:0.00077009201049805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055313110351562

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055313110351562

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002288818359375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054311752319336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043890476226807

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077915191650391

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077915191650391

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061607360839844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061607360839844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014798641204834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014798641204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014798641204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014798641204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014798641204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080299377441406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014798641204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080299377441406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014798641204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080299377441406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014798641204834

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00080299377441406

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066089630126953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011267900466919

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063705444335938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058102607727051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065469741821289

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004580020904541

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002589225769043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0019450187683105

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
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067496299743652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050187110900879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.011246919631958

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050616264343262

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050616264343262

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068902969360352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068902969360352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089287757873535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089287757873535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089287757873535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089287757873535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009000301361084

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00089287757873535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077605247497559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050418376922607

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049901008605957

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012288093566895

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044512748718262

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043320655822754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058929920196533

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00043010711669922

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00043010711669922

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00015997886657715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043702125549316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0001990795135498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001323938369751

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001323938369751

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001323938369751

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001323938369751

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001323938369751

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001323938369751

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001323938369751

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001323938369751

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036001205444336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036749839782715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066304206848145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071148872375488

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00036501884460449

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00025010108947754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006558895111084

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006558895111084

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023317337036133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012898445129395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050020217895508

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051617622375488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003809928894043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0012898445129395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078020095825195

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015759468078613

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015759468078613

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003615140914917

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003615140914917

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028789043426514

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002694845199585

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002694845199585

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038740634918213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002694845199585

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038740634918213

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037868022918701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002694845199585

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038740634918213

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037868022918701

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014331340789795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002694845199585

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038740634918213

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037868022918701

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014331340789795

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044398307800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0032989978790283

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002694845199585

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038740634918213

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037868022918701

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014331340789795

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044398307800293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0087800025939941

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051212310791016

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051212310791016

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030994415283203

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039288997650146

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0039288997650146

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047683715820312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047683715820312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068497657775879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004880428314209

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054216384887695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.006864070892334

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086498260498047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086498260498047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068306922912598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068306922912598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068306922912598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068306922912598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012741088867188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00068306922912598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054597854614258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0069379806518555

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034904479980469

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00062084197998047

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084280967712402

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084280967712402

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008552074432373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008552074432373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002255916595459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008552074432373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002255916595459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028879642486572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008552074432373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002255916595459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028879642486572

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024340152740479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008552074432373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002255916595459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028879642486572

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024340152740479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008552074432373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002255916595459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028879642486572

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024340152740479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007021427154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008552074432373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002255916595459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028879642486572

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024340152740479

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092601776123047

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007021427154541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012699842453003

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055193901062012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041639804840088

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0004279613494873

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00019192695617676

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00041890144348145

select count(*) as cnt from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00041890144348145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '3' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028791427612305

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028791427612305

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014791488647461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011279582977295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011279582977295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011279582977295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011279582977295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048184394836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00130295753479

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011279582977295

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048184394836426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066859722137451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044679641723633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044679641723633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014090538024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044679641723633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014090538024902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044679641723633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014090538024902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069308280944824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011200904846191

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044679641723633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014090538024902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059294700622559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041201114654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019180774688721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019180774688721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020120143890381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019180774688721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020120143890381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019180774688721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020120143890381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024490356445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029370784759521

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021300315856934

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022430419921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019180774688721

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020120143890381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024490356445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656


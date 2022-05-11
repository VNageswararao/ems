select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028479099273682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028479099273682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028479099273682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028479099273682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022408962249756

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028479099273682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022408962249756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0072450637817383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028479099273682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022408962249756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0072450637817383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028479099273682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022408962249756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0072450637817383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027279853820801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028479099273682

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022408962249756

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0072450637817383

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0027279853820801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035111904144287

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033349990844727

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0033349990844727

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0028378963470459

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043761730194092

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043761730194092

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0053699016571045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079989433288574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075888633728027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043797492980957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036382675170898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079989433288574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064206123352051

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064206123352051

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029802322387695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026531219482422

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00066399574279785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059604644775391

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059604644775391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00097513198852539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004889965057373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072407722473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034339427947998

select count(*) as cnt from patient_registration where  patient_registration_id= '1496' and  office_id= '1' 
 Execution Time:0.00080513954162598

select count(*) as cnt from patient_registration where  patient_registration_id= '1496' and  office_id= '1' 
 Execution Time:0.00080513954162598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1496' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048511028289795

select count(*) as cnt from patient_registration where  patient_registration_id= '1496' and  office_id= '1' 
 Execution Time:0.00080513954162598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1496' and  doctors_registration.office_id= '1' 
 Execution Time:0.0048511028289795

select fname,lname,mrdno from patient_registration where  patient_registration_id='1496' and  office_id= '1' 
 Execution Time:0.00030422210693359

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059795379638672

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059795379638672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from patient_registration where  patient_registration_id= '1517' and  office_id= '1' 
 Execution Time:0.0005800724029541

select count(*) as cnt from patient_registration where  patient_registration_id= '1517' and  office_id= '1' 
 Execution Time:0.0005800724029541

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1517' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016860961914062

select count(*) as cnt from patient_registration where  patient_registration_id= '1517' and  office_id= '1' 
 Execution Time:0.0005800724029541

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1517' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016860961914062

select fname,lname,mrdno from patient_registration where  patient_registration_id='1517' and  office_id= '1' 
 Execution Time:0.00025606155395508

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00075507164001465

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00075507164001465

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0033109188079834

select count(*) as cnt from patient_registration where  patient_registration_id= '1489' and  office_id= '1' 
 Execution Time:0.00063514709472656

select count(*) as cnt from patient_registration where  patient_registration_id= '1489' and  office_id= '1' 
 Execution Time:0.00063514709472656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1489' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020270347595215

select count(*) as cnt from patient_registration where  patient_registration_id= '1489' and  office_id= '1' 
 Execution Time:0.00063514709472656

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1489' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020270347595215

select fname,lname,mrdno from patient_registration where  patient_registration_id='1489' and  office_id= '1' 
 Execution Time:0.00025796890258789

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005030632019043

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005030632019043

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035285949707031

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020270347595215

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020270347595215

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089311599731445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00089311599731445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023410320281982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023410320281982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023410320281982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023410320281982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026750564575195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023410320281982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026750564575195

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0062899589538574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023410320281982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026750564575195

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0062899589538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0096530914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023410320281982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026750564575195

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0062899589538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0096530914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035009384155273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023410320281982

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025880336761475

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026750564575195

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0062899589538574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0096530914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035009384155273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043671131134033

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0010008811950684

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0010008811950684

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00022506713867188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033307075500488

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014147758483887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014147758483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010669231414795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014147758483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010669231414795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014147758483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010669231414795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018670558929443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014147758483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010669231414795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018670558929443

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053961277008057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014147758483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010669231414795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018670558929443

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053961277008057

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014147758483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010669231414795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018670558929443

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053961277008057

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035860538482666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014147758483887

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010669231414795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040969848632812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018670558929443

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053961277008057

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027749538421631

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035860538482666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052001476287842

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061893463134766

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00061893463134766

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025606155395508

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083708763122559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00083708763122559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006411075592041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006411075592041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006411075592041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084114074707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006411075592041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084114074707031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031020641326904

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084230899810791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084230899810791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037281513214111

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084230899810791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037281513214111

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011687994003296

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084230899810791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037281513214111

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011687994003296

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037689208984375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084230899810791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037281513214111

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.011687994003296

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037689208984375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.011827945709229

select count(*) as cnt from patient_registration where  patient_registration_id= '1566' and  office_id= '1' 
 Execution Time:0.0058770179748535

select count(*) as cnt from patient_registration where  patient_registration_id= '1566' and  office_id= '1' 
 Execution Time:0.0058770179748535

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1566' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029301643371582

select count(*) as cnt from patient_registration where  patient_registration_id= '1566' and  office_id= '1' 
 Execution Time:0.0058770179748535

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1566' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029301643371582

select fname,lname,mrdno from patient_registration where  patient_registration_id='1566' and  office_id= '1' 
 Execution Time:0.0069499015808105

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.018154144287109

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.018154144287109

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0036029815673828

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00494384765625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034439563751221

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034439563751221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034439563751221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034439563751221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034439563751221

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046515464782715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058412551879883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058412551879883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058412551879883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013020038604736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010759830474854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058412551879883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003709077835083

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0013020038604736

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035390853881836

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0029189586639404

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0029189586639404

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0072228908538818

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016138553619385

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016138553619385

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029361248016357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045850276947021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045850276947021

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039651393890381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045850276947021

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039651393890381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045850276947021

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039651393890381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011200904846191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035839080810547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011169910430908

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0045850276947021

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0039651393890381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036780834197998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011200904846191

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005075216293335

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012309551239014

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012309551239014

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0031509399414062

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0084819793701172

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0084819793701172

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0034921169281006

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047111511230469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047111511230469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047111511230469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047111511230469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084209442138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047111511230469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084209442138672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015919208526611

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015919208526611

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012571811676025

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012571811676025

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0022528171539307

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005488395690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005488395690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005488395690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074505805969238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005488395690918

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043487548828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022170543670654

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061798095703125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00061798095703125

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035881996154785

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00036191940307617

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006110668182373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006110668182373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034809112548828

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042080879211426

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042080879211426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025320053100586

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064897537231445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064897537231445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085186958312988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003511905670166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00085186958312988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031800270080566

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016319751739502

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016319751739502

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014688968658447

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050210952758789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050210952758789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015687942504883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027048587799072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027048587799072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027048587799072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002683162689209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030090808868408

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015289783477783

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0015687942504883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0027048587799072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002683162689209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029711723327637

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0006401538848877

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0006401538848877

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00026106834411621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046110153198242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028209686279297

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00095009803771973

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00095009803771973

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022006034851074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033969879150391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033969879150391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039749145507812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010089874267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064897537231445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00058984756469727

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010089874267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021572113037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058331489562988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058331489562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067629814147949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058331489562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067629814147949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0071108341217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058331489562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067629814147949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0071108341217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0095920562744141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058331489562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067629814147949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0071108341217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0095920562744141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058331489562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067629814147949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0071108341217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0095920562744141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058331489562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067629814147949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0071108341217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0095920562744141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037550926208496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058331489562988

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0067629814147949

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0071108341217041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0095920562744141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037860870361328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037550926208496

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084331035614014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0096931457519531

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0096931457519531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028338432312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0096931457519531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028338432312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032720565795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0096931457519531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028338432312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032720565795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042788982391357

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0096931457519531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028338432312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032720565795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042788982391357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034191608428955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0096931457519531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028338432312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032720565795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042788982391357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034191608428955

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033831596374512

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0096931457519531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028338432312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032720565795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042788982391357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034191608428955

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033831596374512

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039000511169434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0096931457519531

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028338432312012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032720565795898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0042788982391357

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034191608428955

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033831596374512

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0039000511169434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054559707641602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019190311431885

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00072097778320312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042080879211426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041599273681641

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041599273681641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041599273681641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0050778388977051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041599273681641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0050778388977051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041599273681641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010769367218018

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0050778388977051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018579959869385

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.002936840057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031330585479736

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031330585479736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031330585479736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023939609527588

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067710876464844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011370182037354

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056195259094238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031330585479736

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081300735473633

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0023939609527588

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041818618774414

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00048494338989258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054287910461426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00064611434936523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00079607963562012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00080418586730957

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0004420280456543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00044488906860352

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0033719539642334

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0026648044586182

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062203407287598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00071811676025391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041007995605469

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026330947875977

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0016388893127441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030879974365234

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.007882833480835

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0032899379730225

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038700103759766

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017180442810059

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0019910335540771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029740333557129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0034520626068115

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024449825286865

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0029778480529785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031578540802002

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052213668823242

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00046801567077637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096297264099121

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00080299377441406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078892707824707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00061392784118652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.010957956314087

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041730403900146

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00082802772521973

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00046205520629883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010871887207031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00079703330993652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010290145874023

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010290145874023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010290145874023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010290145874023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010290145874023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0014491081237793

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018508434295654

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00057005882263184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041699409484863

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036721229553223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0044569969177246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042619705200195

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015261173248291

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044901371002197

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0024640560150146

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0039589405059814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024838447570801

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00059008598327637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089097023010254

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0042049884796143

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011880397796631

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00046086311340332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0028641223907471

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00072503089904785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055384635925293

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00045609474182129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00063109397888184

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00051188468933105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00029611587524414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0035929679870605

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.002830982208252

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028190612792969

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00063085556030273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005490779876709

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072312355041504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.01082706451416

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00053787231445312

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00088405609130859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00031614303588867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00074195861816406

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00070500373840332

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00057220458984375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0034730434417725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003864049911499

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0066800117492676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0023179054260254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001629114151001

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0027029514312744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034720897674561

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062704086303711

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00058603286743164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030779838562012

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00042819976806641

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00029492378234863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015616416931152

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0022518634796143

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0018889904022217

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012528896331787

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0030269622802734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0042951107025146

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041508674621582

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0010750293731689

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067806243896484

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 38 
 Execution Time:0.00065994262695312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0019521713256836

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 38 
 Execution Time:0.0011200904846191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011157989501953

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 38 
 Execution Time:0.0024628639221191

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028290748596191

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010828971862793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010828971862793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010828971862793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010828971862793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00140380859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010828971862793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011570453643799

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00140380859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00078797340393066

select count(*) as cnt from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00078797340393066

select gender from patient_title where  patient_title_id = '21' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00058603286743164

select count(*) as cnt from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00058603286743164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '11' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001690149307251

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001690149307251

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069780349731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001690149307251

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069780349731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001690149307251

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069780349731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012121200561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001690149307251

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069780349731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012121200561523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001690149307251

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069780349731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012121200561523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001690149307251

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069780349731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012121200561523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073695182800293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001690149307251

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0069780349731445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012121200561523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073695182800293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00062298774719238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010890960693359

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.00060796737670898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.002885103225708

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 40 
 Execution Time:0.0059630870819092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044150352478027


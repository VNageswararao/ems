select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004539966583252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004539966583252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004539966583252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004539966583252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019018650054932

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025250911712646

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023400783538818

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022389888763428

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.004539966583252

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0020530223846436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0019018650054932

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002385139465332

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021505355834961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067591667175293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067591667175293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029587745666504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056290626525879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020408630371094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054311752319336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054311752319336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029420852661133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075793266296387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075793266296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075793266296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075793266296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086283683776855

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084185600280762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082993507385254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075793266296387

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086283683776855

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030460357666016

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.0027949810028076

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.0027949810028076

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053501129150391

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.0027949810028076

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0053501129150391

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.00099301338195801

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062799453735352

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00062799453735352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from patient_registration where  patient_registration_id= '964' and  office_id= '1' 
 Execution Time:0.00083613395690918

select count(*) as cnt from patient_registration where  patient_registration_id= '964' and  office_id= '1' 
 Execution Time:0.00083613395690918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='964' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033318996429443

select count(*) as cnt from patient_registration where  patient_registration_id= '964' and  office_id= '1' 
 Execution Time:0.00083613395690918

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='964' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033318996429443

select fname,lname,mrdno from patient_registration where  patient_registration_id='964' and  office_id= '1' 
 Execution Time:0.00027990341186523

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007631778717041

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007631778717041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0025510787963867

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025889873504639

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0039219856262207

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0039219856262207

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048494338989258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048494338989258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016062259674072

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016062259674072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016062259674072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016062259674072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016062259674072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016062259674072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016062259674072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059390068054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016062259674072

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033998489379883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059390068054199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033168792724609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086307525634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086307525634766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034728050231934

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.0023720264434814

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.0023720264434814

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0061180591583252

select count(*) as cnt from patient_registration where  patient_registration_id= '1100' and  office_id= '1' 
 Execution Time:0.0023720264434814

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0061180591583252

select fname,lname,mrdno from patient_registration where  patient_registration_id='1100' and  office_id= '1' 
 Execution Time:0.0020489692687988

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0075910091400146

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0075910091400146

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0038361549377441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056886672973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056886672973633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029489994049072

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068230628967285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068230628967285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068230628967285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.012936115264893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068230628967285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.012936115264893

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.010339021682739

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-20' and  '2021-10-20' and  billing_master.office_id= 1        
 Execution Time:0.0011940002441406

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-20' and  '2021-10-20' and  billing_master.office_id= 1        
 Execution Time:0.0011940002441406

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-20' and '2021-10-20' and  patient_registration.office_id= 1      
 Execution Time:0.0026121139526367

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060892105102539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060892105102539

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046300888061523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042390823364258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000244140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045759677886963

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045759677886963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.013279914855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045759677886963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.013279914855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079498291015625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045759677886963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.013279914855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079498291015625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053889751434326

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045759677886963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.013279914855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079498291015625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053889751434326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056159496307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045759677886963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.013279914855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079498291015625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053889751434326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056159496307373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.015675783157349

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019509792327881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0045759677886963

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.013279914855957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079498291015625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0053889751434326

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0056159496307373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.015675783157349

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046498775482178

select count(*) as cnt from patient_registration where  patient_registration_id= '247' and  office_id= '1' 
 Execution Time:0.0014441013336182

select count(*) as cnt from patient_registration where  patient_registration_id= '247' and  office_id= '1' 
 Execution Time:0.0014441013336182

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='247' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027241706848145

select count(*) as cnt from patient_registration where  patient_registration_id= '247' and  office_id= '1' 
 Execution Time:0.0014441013336182

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='247' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027241706848145

select fname,lname,mrdno from patient_registration where  patient_registration_id='247' and  office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00090217590332031

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00090217590332031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036311149597168

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049090385437012

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036382675170898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053596496582031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053596496582031

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011110305786133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016951560974121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016951560974121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016951560974121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038058757781982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016951560974121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038058757781982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016951560974121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038058757781982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036270618438721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016951560974121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038058757781982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036270618438721

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0059740543365479

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016951560974121

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038058757781982

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035400390625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036270618438721

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0059740543365479

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034191608428955

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026779174804688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026779174804688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-20' and '2021-10-20' and  patient_registration.office_id= 1      
 Execution Time:0.0069839954376221

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004141092300415

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004141092300415

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004141092300415

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004141092300415

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083780288696289

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-20' and  '2021-10-20' and  billing_master.office_id= 1        
 Execution Time:0.0024440288543701

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-10-20' and  '2021-10-20' and  billing_master.office_id= 1        
 Execution Time:0.0024440288543701

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-10-20' and '2021-10-20' and  patient_registration.office_id= 1      
 Execution Time:0.0030720233917236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045409202575684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045409202575684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018050670623779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045409202575684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018050670623779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038418769836426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045409202575684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018050670623779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038418769836426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037610530853271

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045409202575684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018050670623779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038418769836426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037610530853271

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038368701934814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045409202575684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018050670623779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038418769836426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037610530853271

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038368701934814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045409202575684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018050670623779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038418769836426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037610530853271

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038368701934814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050649642944336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045409202575684

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0018050670623779

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038418769836426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037610530853271

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038368701934814

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0030078887939453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0050649642944336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090699195861816

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0053780078887939

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0053780078887939

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033402442932129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040559768676758

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040559768676758

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036380290985107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022599697113037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022599697113037

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022599697113037

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010881423950195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022599697113037

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010881423950195

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017361640930176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022599697113037

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010881423950195

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017361640930176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010722875595093

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022599697113037

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010881423950195

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017361640930176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010722875595093

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035550594329834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022599697113037

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010881423950195

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017361640930176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.010722875595093

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035550594329834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0081970691680908

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037312507629395

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037312507629395

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0089631080627441

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0089631080627441

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0030488967895508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018620491027832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018620491027832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018620491027832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018620491027832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018620491027832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018620491027832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018620491027832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0018620491027832

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034818649291992

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.0083889961242676

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.0083889961242676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1103' and  doctors_registration.office_id= '1' 
 Execution Time:0.0062730312347412

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.0083889961242676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1103' and  doctors_registration.office_id= '1' 
 Execution Time:0.0062730312347412

select fname,lname,mrdno from patient_registration where  patient_registration_id='1103' and  office_id= '1' 
 Execution Time:0.0037751197814941

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0071570873260498

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0071570873260498

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0036709308624268

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037460327148438

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00097203254699707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.00036907196044922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1103' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016570091247559

select count(*) as cnt from patient_registration where  patient_registration_id= '1103' and  office_id= '1' 
 Execution Time:0.00036907196044922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1103' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016570091247559

select fname,lname,mrdno from patient_registration where  patient_registration_id='1103' and  office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.040081024169922

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.040081024169922

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033180713653564

select * from investigation where  investigation_id=18  and office_id= 1 and status=1 
 Execution Time:0.00079989433288574

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044620037078857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044620037078857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044620037078857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003626823425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044620037078857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003626823425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044620037078857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034940242767334

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.003626823425293

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017819404602051

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0038161277770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056328773498535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056328773498535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071749687194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056328773498535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071749687194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003385066986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056328773498535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071749687194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003385066986084

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038011074066162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.004828929901123

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048038959503174

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0056328773498535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0071749687194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003385066986084

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038011074066162

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007145881652832

select count(*) as cnt from patient_registration where  patient_registration_id= '1657' and  office_id= '1' 
 Execution Time:0.0018148422241211

select count(*) as cnt from patient_registration where  patient_registration_id= '1657' and  office_id= '1' 
 Execution Time:0.0018148422241211

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1657' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033590793609619

select count(*) as cnt from patient_registration where  patient_registration_id= '1657' and  office_id= '1' 
 Execution Time:0.0018148422241211

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1657' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033590793609619

select fname,lname,mrdno from patient_registration where  patient_registration_id='1657' and  office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00068783760070801

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00068783760070801

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00051212310791016

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013439655303955

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013439655303955

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0031161308288574

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040292739868164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021359920501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021359920501709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021359920501709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021359920501709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021359920501709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021359920501709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082492828369141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021359920501709

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032615661621094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082492828369141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023519992828369

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0019280910491943

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0019280910491943

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078105926513672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078105926513672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065112113952637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047683715820312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046396255493164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024070739746094

select count(*) as cnt from patient_registration where  patient_registration_id= '1280' and  office_id= '1' 
 Execution Time:0.0036149024963379

select count(*) as cnt from patient_registration where  patient_registration_id= '1280' and  office_id= '1' 
 Execution Time:0.0036149024963379

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1280' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037479400634766

select count(*) as cnt from patient_registration where  patient_registration_id= '1280' and  office_id= '1' 
 Execution Time:0.0036149024963379

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1280' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037479400634766

select fname,lname,mrdno from patient_registration where  patient_registration_id='1280' and  office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002899169921875

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055909156799316

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055909156799316

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.009951114654541

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067710876464844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067710876464844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0094609260559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0094609260559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074951648712158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0094609260559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074951648712158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018491744995117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0094609260559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074951648712158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018491744995117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057220458984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0094609260559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074951648712158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018491744995117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057220458984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0094609260559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074951648712158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018491744995117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057220458984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0094609260559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074951648712158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018491744995117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057220458984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0094609260559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074951648712158

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018491744995117

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00057220458984375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027139186859131

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003216028213501

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.003216028213501

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0011379718780518

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032060146331787

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0032060146331787

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037589073181152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010883092880249

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010883092880249

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077438354492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010883092880249

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077438354492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010883092880249

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077438354492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040409564971924

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010883092880249

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077438354492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040409564971924

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010883092880249

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077438354492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040409564971924

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004688024520874

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010883092880249

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077438354492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040409564971924

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004688024520874

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0078771114349365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010883092880249

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077438354492188

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036818981170654

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0040409564971924

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037550926208496

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004688024520874

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0078771114349365

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004364013671875

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063109397888184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012869834899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046205520629883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00071191787719727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032610893249512

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043389797210693

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0043389797210693

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027410984039307

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014200210571289

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014200210571289

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038270950317383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038270950317383

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038270950317383

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038270950317383

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030760765075684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003695011138916

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037519931793213

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038270950317383

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095796585083008

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030760765075684

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042819976806641

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0027329921722412

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0027329921722412

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.003000020980835

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010461807250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010461807250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010461807250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032229423522949

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010461807250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032229423522949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010461807250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032229423522949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010461807250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032229423522949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044019222259521

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010461807250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032229423522949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044019222259521

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003770112991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010461807250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083088874816895

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0032229423522949

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049996376037598

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044019222259521

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003770112991333

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0076470375061035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0067331790924072

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0067331790924072

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0086419582366943

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001129150390625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001129150390625

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0031740665435791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031495094299316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067400932312012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037758350372314

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035808086395264

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035808086395264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023229122161865

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035808086395264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023229122161865

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035808086395264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023229122161865

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031239986419678

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035808086395264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023229122161865

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031239986419678

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017449855804443

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035808086395264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023229122161865

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031239986419678

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017449855804443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036940574645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035808086395264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023229122161865

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031239986419678

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017449855804443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036940574645996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002032995223999

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035808086395264

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0023229122161865

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0031239986419678

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017449855804443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036940574645996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002032995223999

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079290866851807

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064599514007568

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064599514007568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064599514007568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.021637916564941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064599514007568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.021637916564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0057728290557861

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0064599514007568

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014021396636963

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.021637916564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0057728290557861

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.011780977249146

select count(*) as cnt from patient_registration where  patient_registration_id= '1685' and  office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from patient_registration where  patient_registration_id= '1685' and  office_id= '1' 
 Execution Time:0.00055599212646484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1685' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030307769775391

select count(*) as cnt from patient_registration where  patient_registration_id= '1685' and  office_id= '1' 
 Execution Time:0.00055599212646484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1685' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030307769775391

select fname,lname,mrdno from patient_registration where  patient_registration_id='1685' and  office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00541090965271

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00541090965271

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022850036621094

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.0007472038269043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047669410705566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047669410705566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044350624084473

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047669410705566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044350624084473

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032060146331787

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047669410705566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044350624084473

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032060146331787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047669410705566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044350624084473

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0032060146331787

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0015721321105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094509124755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094509124755859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094509124755859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094509124755859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016429424285889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013530254364014

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00094509124755859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00074386596679688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011110305786133

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0016429424285889

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048799514770508

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.00063109397888184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034360885620117

select count(*) as cnt from patient_registration where  patient_registration_id= '1468' and  office_id= '1' 
 Execution Time:0.00063109397888184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1468' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034360885620117

select fname,lname,mrdno from patient_registration where  patient_registration_id='1468' and  office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057005882263184

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057005882263184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065207481384277

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00065207481384277

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014810562133789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014810562133789

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001107931137085

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036349296569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036349296569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036349296569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036349296569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001140832901001

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036349296569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001140832901001

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036349296569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001140832901001

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036349296569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001140832901001

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015921592712402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036349296569824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001140832901001

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00097298622131348

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010299682617188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015921592712402

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0063498020172119

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.009768009185791

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.009768009185791

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0013120174407959

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0080771446228027

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0080771446228027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0055549144744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014400482177734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014400482177734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0051422119140625

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014400482177734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0051422119140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014400482177734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0051422119140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037009716033936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014400482177734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0051422119140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037009716033936

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047488212585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0038769245147705

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037851333618164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0014400482177734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0051422119140625

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003774881362915

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037009716033936

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047488212585449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0085229873657227

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050115585327148

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0033159255981445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029189586639404

select count(*) as cnt from patient_registration where  patient_registration_id= '1686' and  office_id= '1' 
 Execution Time:0.00045514106750488

select count(*) as cnt from patient_registration where  patient_registration_id= '1686' and  office_id= '1' 
 Execution Time:0.00045514106750488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1686' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026109218597412

select count(*) as cnt from patient_registration where  patient_registration_id= '1686' and  office_id= '1' 
 Execution Time:0.00045514106750488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1686' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026109218597412

select fname,lname,mrdno from patient_registration where  patient_registration_id='1686' and  office_id= '1' 
 Execution Time:0.0012068748474121

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093698501586914

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093698501586914

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005791187286377

select * from investigation where  investigation_id=9  and office_id= 1 and status=1 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033512115478516

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033512115478516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033512115478516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033512115478516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033512115478516

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078606605529785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061297416687012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00078606605529785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0082318782806396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007021427154541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038504600524902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031518936157227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032281875610352

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005030632019043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023891925811768

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003969669342041

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025320053100586

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070881843566895

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00070881843566895

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0036330223083496

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0036330223083496

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.000823974609375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093793869018555

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093793869018555

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000762939453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000762939453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002500057220459

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066709518432617

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066709518432617

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027704238891602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057005882263184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057005882263184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033650398254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033650398254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033650398254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033650398254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033650398254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033650398254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033650398254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033650398254395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019199848175049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040507316589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021719932556152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063705444335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053906440734863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047016143798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063705444335938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031778812408447

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00073599815368652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00073599815368652

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00032711029052734

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00022292137145996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000640869140625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000640869140625

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046920776367188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046920776367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046920776367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046920776367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077009201049805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046920776367188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077009201049805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003741979598999

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075912475585938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066304206848145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005340576171875

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068092346191406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027110576629639

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025391578674316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025391578674316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025391578674316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025391578674316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019311904907227

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029730796813965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023293495178223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046014785766602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002331018447876

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032496452331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035867691040039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002997875213623

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039529800415039

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039529800415039

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00096392631530762

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00090599060058594

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00090599060058594

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062940120697021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062940120697021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058879852294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062940120697021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058879852294922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062940120697021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058879852294922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003781795501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062940120697021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058879852294922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003781795501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067939758300781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062940120697021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058879852294922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003781795501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067939758300781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062940120697021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058879852294922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003781795501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067939758300781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028750896453857

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062940120697021

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0058879852294922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0033550262451172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003781795501709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067939758300781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037820339202881

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0028750896453857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0075910091400146

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001957893371582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001957893371582

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026600360870361

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005638599395752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005638599395752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026271343231201

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026271343231201

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026271343231201

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026271343231201

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012660026550293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026271343231201

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012660026550293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045809745788574

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026271343231201

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012660026550293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045809745788574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036509037017822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026271343231201

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012660026550293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045809745788574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036509037017822

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011789798736572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0026271343231201

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013120174407959

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012729167938232

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012660026550293

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0045809745788574

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0036509037017822

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011789798736572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050199031829834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002448558807373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032711029052734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036470890045166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039980411529541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039980411529541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039980411529541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013360977172852

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039980411529541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013360977172852

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039980411529541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053286552429199

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013360977172852

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011019706726074

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.004688024520874

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.004688024520874

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1595' and  doctors_registration.office_id= '1' 
 Execution Time:0.0068490505218506

select count(*) as cnt from patient_registration where  patient_registration_id= '1595' and  office_id= '1' 
 Execution Time:0.004688024520874

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1595' and  doctors_registration.office_id= '1' 
 Execution Time:0.0068490505218506

select fname,lname,mrdno from patient_registration where  patient_registration_id='1595' and  office_id= '1' 
 Execution Time:0.0037009716033936

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.013277053833008

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.013277053833008

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066089630126953

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00056886672973633

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00063991546630859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029690265655518

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062108039855957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00062417984008789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039505958557129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039241313934326

select count(*) as cnt from patient_registration where  patient_registration_id= '1526' and  office_id= '1' 
 Execution Time:0.00047397613525391

select count(*) as cnt from patient_registration where  patient_registration_id= '1526' and  office_id= '1' 
 Execution Time:0.00047397613525391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1526' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018560886383057

select count(*) as cnt from patient_registration where  patient_registration_id= '1526' and  office_id= '1' 
 Execution Time:0.00047397613525391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1526' and  doctors_registration.office_id= '1' 
 Execution Time:0.0018560886383057

select fname,lname,mrdno from patient_registration where  patient_registration_id='1526' and  office_id= '1' 
 Execution Time:0.00022292137145996

select count(*) as cnt from patient_registration where  patient_registration_id= '501' and  office_id= '1' 
 Execution Time:0.002086877822876

select count(*) as cnt from patient_registration where  patient_registration_id= '501' and  office_id= '1' 
 Execution Time:0.002086877822876

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='501' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023660659790039

select count(*) as cnt from patient_registration where  patient_registration_id= '501' and  office_id= '1' 
 Execution Time:0.002086877822876

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='501' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023660659790039

select fname,lname,mrdno from patient_registration where  patient_registration_id='501' and  office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00087690353393555

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00087690353393555

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078916549682617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00078916549682617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011999607086182

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011999607086182

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011999607086182

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011999607086182

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010411739349365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076103210449219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011999607086182

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0029020309448242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010411739349365

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032041072845459

select count(*) as cnt from patient_registration where  patient_registration_id= '1389' and  office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from patient_registration where  patient_registration_id= '1389' and  office_id= '1' 
 Execution Time:0.00034499168395996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1389' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016441345214844

select count(*) as cnt from patient_registration where  patient_registration_id= '1389' and  office_id= '1' 
 Execution Time:0.00034499168395996

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1389' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016441345214844

select fname,lname,mrdno from patient_registration where  patient_registration_id='1389' and  office_id= '1' 
 Execution Time:0.00022292137145996

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048708915710449

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048708915710449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034189224243164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077590942382812

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077590942382812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077590942382812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0089480876922607

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077590942382812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0089480876922607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0031368732452393

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077590942382812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026648044586182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0089480876922607

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0031368732452393

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0038039684295654

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083518028259277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031900405883789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00083518028259277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020837783813477

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028049945831299

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028049945831299

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034909248352051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024070739746094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024070739746094

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040647983551025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014137983322144

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014137983322144

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014137983322144

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014137983322144

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014137983322144

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014137983322144

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014137983322144

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036451816558838

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.014137983322144

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036311149597168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0039198398590088

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037851333618164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036451816558838

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046160221099854

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00036501884460449

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015850067138672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015850067138672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0028409957885742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0075919628143311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0075919628143311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048749446868896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0075919628143311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048749446868896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043799877166748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0075919628143311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048749446868896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043799877166748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020689964294434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0075919628143311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048749446868896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043799877166748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020689964294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0051279067993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0075919628143311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048749446868896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043799877166748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020689964294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0051279067993164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0075919628143311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048749446868896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043799877166748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020689964294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0051279067993164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044481754302979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0075919628143311

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048749446868896

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043799877166748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020689964294434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0051279067993164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0044481754302979

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004586935043335

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056791305541992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056791305541992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012178421020508

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0012178421020508

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026280879974365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026280879974365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026280879974365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026280879974365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026280879974365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076413154602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010612010955811

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033340454101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026280879974365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00054502487182617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076413154602051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035789012908936

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034880638122559

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0034880638122559

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026009082794189

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.006162166595459

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.006162166595459

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043730735778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081329345703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081329345703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029008388519287

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081329345703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029008388519287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081329345703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029008388519287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066018104553223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081329345703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029008388519287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066018104553223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081329345703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029008388519287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066018104553223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045540332794189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081329345703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029008388519287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066018104553223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045540332794189

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0053138732910156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0081329345703125

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0029008388519287

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036299228668213

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00066018104553223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0045540332794189

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0053138732910156

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005864143371582

select count(*) as cnt from patient_registration where  patient_registration_id= '1450' and  office_id= '1' 
 Execution Time:0.0013329982757568

select count(*) as cnt from patient_registration where  patient_registration_id= '1450' and  office_id= '1' 
 Execution Time:0.0013329982757568

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1450' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035581588745117

select count(*) as cnt from patient_registration where  patient_registration_id= '1450' and  office_id= '1' 
 Execution Time:0.0013329982757568

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1450' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035581588745117

select fname,lname,mrdno from patient_registration where  patient_registration_id='1450' and  office_id= '1' 
 Execution Time:0.00037097930908203

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0096650123596191

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0096650123596191

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021240711212158

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0021240711212158

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0023541450500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040159225463867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040159225463867

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.011863946914673

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018150806427002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018150806427002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0094170570373535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018150806427002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0094170570373535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010483980178833

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018150806427002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0094170570373535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010483980178833

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027420520782471

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018150806427002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0094170570373535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010483980178833

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027420520782471

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0078089237213135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0031030178070068

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.018150806427002

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0094170570373535

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.010483980178833

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0027420520782471

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0078089237213135

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00518798828125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008389949798584

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0008389949798584

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034880638122559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001021146774292

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047869682312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047869682312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038681030273438

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047869682312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038681030273438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047869682312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038681030273438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047869682312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038681030273438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047910213470459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033140182495117

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0048489570617676

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0047869682312012

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038681030273438

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037879943847656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047910213470459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0084681510925293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075602531433105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075602531433105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0041208267211914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059199333190918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059199333190918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0006709098815918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053691864013672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038003921508789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040507316589355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032510757446289

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00044894218444824

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049729347229004

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0049729347229004

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017991065979004

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002223014831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002223014831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022659301757812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002223014831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022659301757812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002223014831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022659301757812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002223014831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022659301757812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010719299316406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056600570678711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002223014831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0022659301757812

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015051364898682

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00070285797119141

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010719299316406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033149719238281

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048303604125977

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048303604125977

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044393539428711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044393539428711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043296813964844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032496452331543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021228790283203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020139217376709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020139217376709

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013818740844727

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040602684020996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063204765319824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070810317993164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020098686218262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063204765319824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021071434020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053868293762207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053868293762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017549991607666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053868293762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017549991607666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.017518997192383

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053868293762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017549991607666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.017518997192383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0080680847167969

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053868293762207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017549991607666

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.017518997192383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0080680847167969

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.013806819915771

select count(*) as cnt from patient_registration where  patient_registration_id= '1450' and  office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_registration where  patient_registration_id= '1450' and  office_id= '1' 
 Execution Time:0.00035595893859863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1450' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029430389404297

select count(*) as cnt from patient_registration where  patient_registration_id= '1450' and  office_id= '1' 
 Execution Time:0.00035595893859863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1450' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029430389404297

select fname,lname,mrdno from patient_registration where  patient_registration_id='1450' and  office_id= '1' 
 Execution Time:0.00028586387634277

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.027801036834717

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.027801036834717

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.010100841522217

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.0015869140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066449642181396

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066449642181396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066449642181396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066449642181396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066449642181396

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.000701904296875

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043859481811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043859481811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034430027008057

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043859481811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034430027008057

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043859481811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034430027008057

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037729740142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043859481811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034430027008057

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037729740142822

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043859481811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034430027008057

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037729740142822

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037300586700439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043859481811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034430027008057

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037729740142822

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037300586700439

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037441253662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043859481811523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034430027008057

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037479400634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037729740142822

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037300586700439

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037441253662109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004666805267334

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012140274047852

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012140274047852

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0016880035400391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015168190002441

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015168190002441

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026729106903076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060915946960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060915946960449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060915946960449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060915946960449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099492073059082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00087404251098633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060915946960449

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099492073059082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035629272460938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001370906829834

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.001370906829834

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00074601173400879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029420852661133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001492977142334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001492977142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001492977142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062630176544189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001492977142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062630176544189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001492977142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062630176544189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001492977142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062630176544189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001492977142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062630176544189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053906440734863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.001492977142334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019030570983887

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062630176544189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047802925109863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015809535980225

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054621696472168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053906440734863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046429634094238

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0076529979705811

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0076529979705811

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.010679006576538

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060701370239258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060701370239258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006098747253418

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035309791564941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014996528625488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047993659973145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019149780273438

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080831050872803

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0014150142669678

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00060892105102539

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0011088848114014

select count(*) as cnt from patient_registration where  patient_registration_id= '1709' and  office_id= '1' 
 Execution Time:0.001511812210083

select count(*) as cnt from patient_registration where  patient_registration_id= '1709' and  office_id= '1' 
 Execution Time:0.001511812210083

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1709' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031421184539795

select count(*) as cnt from patient_registration where  patient_registration_id= '1709' and  office_id= '1' 
 Execution Time:0.001511812210083

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1709' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031421184539795

select fname,lname,mrdno from patient_registration where  patient_registration_id='1709' and  office_id= '1' 
 Execution Time:0.00041007995605469

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0245680809021

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0245680809021

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0067629814147949

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.0011899471282959

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013580799102783

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013580799102783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013580799102783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013580799102783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013580799102783

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005094051361084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005094051361084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012497901916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005094051361084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012497901916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031650066375732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005094051361084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012497901916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031650066375732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005094051361084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012497901916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031650066375732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014979839324951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0046219825744629

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.005094051361084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012497901916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031650066375732

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010709762573242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014979839324951

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027909278869629

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0027909278869629

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041294097900391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084209442138672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055313110351562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041985511779785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043296813964844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023729801177979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007235050201416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007235050201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016791820526123

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007235050201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016791820526123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045289993286133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007235050201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016791820526123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045289993286133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005375862121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007235050201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016791820526123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045289993286133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005375862121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007235050201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016791820526123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045289993286133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005375862121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059330463409424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007235050201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016791820526123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045289993286133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005375862121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059330463409424

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096893310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.007235050201416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016791820526123

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0045289993286133

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.005375862121582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015449523925781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0059330463409424

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096893310546875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0078649520874023

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0019059181213379

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0019059181213379

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.004302978515625

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005180835723877

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002748966217041

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056815147399902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032789707183838


select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025210380554199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025210380554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019130706787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025210380554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019130706787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019989013671875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025210380554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019130706787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019989013671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019571781158447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025210380554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019130706787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019989013671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019571781158447

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018460750579834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025210380554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019130706787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019989013671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019571781158447

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018460750579834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025210380554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019130706787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019989013671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019571781158447

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018460750579834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024080276489258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025210380554199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0019130706787109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0019989013671875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0019571781158447

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018460750579834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024080276489258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026710033416748

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079107284545898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00079107284545898

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048589706420898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003211498260498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012638568878174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012638568878174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012638568878174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012638568878174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012638568878174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012638568878174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012638568878174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012638568878174

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076508522033691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0022048950195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034403800964355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041229724884033

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027649402618408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027649402618408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027649402618408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027649402618408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027649402618408

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0019690990447998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019450187683105

select count(*) as cnt from patient_registration where  patient_registration_id= '1984' and  office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from patient_registration where  patient_registration_id= '1984' and  office_id= '1' 
 Execution Time:0.00056695938110352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1984' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026040077209473

select count(*) as cnt from patient_registration where  patient_registration_id= '1984' and  office_id= '1' 
 Execution Time:0.00056695938110352

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1984' and  doctors_registration.office_id= '1' 
 Execution Time:0.0026040077209473

select fname,lname,mrdno from patient_registration where  patient_registration_id='1984' and  office_id= '1' 
 Execution Time:0.00029611587524414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038681030273438

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0038681030273438

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0003509521484375

select * from investigation where  investigation_id=22  and office_id= 1 and status=1 
 Execution Time:0.0011060237884521

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048091411590576

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048091411590576

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048091411590576

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048091411590576

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048091411590576

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067377090454102

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076103210449219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005488395690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003199577331543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034594535827637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076103210449219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023610591888428

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055694580078125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024104118347168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068402290344238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068402290344238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049805641174316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024399757385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073981285095215

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052189826965332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026388168334961

select count(*) as cnt from patient_registration where  patient_registration_id= '1808' and  office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from patient_registration where  patient_registration_id= '1808' and  office_id= '1' 
 Execution Time:0.00056600570678711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1808' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019638538360596

select count(*) as cnt from patient_registration where  patient_registration_id= '1808' and  office_id= '1' 
 Execution Time:0.00056600570678711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1808' and  doctors_registration.office_id= '1' 
 Execution Time:0.0019638538360596

select fname,lname,mrdno from patient_registration where  patient_registration_id='1808' and  office_id= '1' 
 Execution Time:0.00027680397033691

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0047049522399902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0047049522399902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00099515914916992

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00099515914916992

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038886070251465

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010139942169189

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010139942169189

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034129619598389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034129619598389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034129619598389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010569095611572

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00065183639526367

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00051498413085938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072407722473145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0034129619598389

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012478828430176

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010569095611572

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042109489440918

select count(*) as cnt from patient_registration where  patient_registration_id= '100' and  office_id= '1' 
 Execution Time:0.00052094459533691

select count(*) as cnt from patient_registration where  patient_registration_id= '100' and  office_id= '1' 
 Execution Time:0.00052094459533691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022308826446533

select count(*) as cnt from patient_registration where  patient_registration_id= '100' and  office_id= '1' 
 Execution Time:0.00052094459533691

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='100' and  doctors_registration.office_id= '1' 
 Execution Time:0.0022308826446533

select fname,lname,mrdno from patient_registration where  patient_registration_id='100' and  office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084495544433594

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084495544433594

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055885314941406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055885314941406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025231838226318

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065302848815918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065302848815918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018906593322754

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078392028808594

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078392028808594

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048589706420898

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066184997558594

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00066184997558594

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070095062255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070095062255859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070095062255859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070095062255859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010900497436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00098991394042969

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070095062255859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010900497436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036940574645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036096572875977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005340576171875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024869441986084

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043082237243652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00043082237243652

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047111511230469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047111511230469

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020129680633545

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045671463012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045671463012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045671463012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045671463012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045671463012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045671463012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045671463012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087213516235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045671463012695

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011420249938965

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087213516235352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052769184112549

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0075349807739258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0075349807739258

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033020973205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021648406982422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021648406982422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021648406982422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069379806518555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021648406982422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069379806518555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021648406982422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069379806518555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021648406982422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069379806518555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.01165509223938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070905685424805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021648406982422

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069379806518555

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0041019916534424

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.01165509223938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016435861587524

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034403800964355

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002140998840332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052380561828613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052380561828613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043296813964844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040721893310547

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037002563476562

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018906593322754

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035405158996582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032482147216797

select count(*) as cnt from patient_registration where  patient_registration_id= '322' and  office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from patient_registration where  patient_registration_id= '322' and  office_id= '1' 
 Execution Time:0.00028514862060547

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='322' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020711421966553

select count(*) as cnt from patient_registration where  patient_registration_id= '322' and  office_id= '1' 
 Execution Time:0.00028514862060547

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='322' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020711421966553

select fname,lname,mrdno from patient_registration where  patient_registration_id='322' and  office_id= '1' 
 Execution Time:0.00018596649169922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0033531188964844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0033531188964844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025105476379395

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00048685073852539

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00048685073852539

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00026988983154297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074219703674316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074219703674316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041317939758301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075292587280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069093704223633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004429817199707

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075292587280273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023491382598877

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075602531433105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075602531433105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00023889541625977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034594535827637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015592575073242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041890144348145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022621154785156

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072288513183594

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00072288513183594

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020599365234375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057291984558105

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057291984558105

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034713745117188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039982795715332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039982795715332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039982795715332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073504447937012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039982795715332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042779445648193

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036215782165527

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036215782165527

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019717216491699

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042200088500977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018692016601562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038886070251465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021841526031494

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057506561279297

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057506561279297

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030016899108887

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084590911865234

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084590911865234

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010001659393311

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054130554199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054130554199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054130554199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054130554199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043699741363525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054130554199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043699741363525

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054130554199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043699741363525

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054130554199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043699741363525

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054130554199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020420551300049

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0043699741363525

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061893463134766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026381015777588

select count(*) as cnt from patient_registration where  patient_registration_id= '95' and  office_id= '1' 
 Execution Time:0.00039005279541016

select count(*) as cnt from patient_registration where  patient_registration_id= '95' and  office_id= '1' 
 Execution Time:0.00039005279541016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='95' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030438899993896

select count(*) as cnt from patient_registration where  patient_registration_id= '95' and  office_id= '1' 
 Execution Time:0.00039005279541016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='95' and  doctors_registration.office_id= '1' 
 Execution Time:0.0030438899993896

select fname,lname,mrdno from patient_registration where  patient_registration_id='95' and  office_id= '1' 
 Execution Time:0.00030684471130371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from patient_registration where  patient_registration_id= '1659' and  office_id= '1' 
 Execution Time:0.00061202049255371

select count(*) as cnt from patient_registration where  patient_registration_id= '1659' and  office_id= '1' 
 Execution Time:0.00061202049255371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1659' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024688243865967

select count(*) as cnt from patient_registration where  patient_registration_id= '1659' and  office_id= '1' 
 Execution Time:0.00061202049255371

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1659' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024688243865967

select fname,lname,mrdno from patient_registration where  patient_registration_id='1659' and  office_id= '1' 
 Execution Time:0.00020003318786621

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00097918510437012

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00097918510437012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086712837219238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064396858215332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073814392089844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086712837219238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004101037979126

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010631084442139

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0010631084442139

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058169364929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058169364929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058169364929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058169364929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076580047607422

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058169364929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076580047607422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058169364929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076580047607422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058169364929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076580047607422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063490867614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0058169364929199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076580047607422

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069713592529297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002748966217041

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063490867614746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002763032913208

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00064301490783691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081396102905273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00081396102905273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077521800994873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077521800994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050292015075684

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077521800994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050292015075684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077521800994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050292015075684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077521800994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050292015075684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077521800994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050292015075684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077521800994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050292015075684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0077521800994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0050292015075684

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035691261291504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039651393890381

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0052409172058105

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0052409172058105

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016438961029053

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016438961029053

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011458396911621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011458396911621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011458396911621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011458396911621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077199935913086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011458396911621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077199935913086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011458396911621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077199935913086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010960102081299

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011458396911621

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00077199935913086

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007939338684082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010960102081299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023391246795654

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052809715270996

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031805038452148

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057506561279297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026068687438965

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026068687438965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026068687438965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091290473937988

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059700012207031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056815147399902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026068687438965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091290473937988

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053501129150391

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006558895111084

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006558895111084

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048613548278809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013980865478516

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013980865478516

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016212463378906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003821849822998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025649070739746

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00064301490783691

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00064301490783691

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.00033998489379883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1920' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029520988464355

select count(*) as cnt from patient_registration where  patient_registration_id= '1920' and  office_id= '1' 
 Execution Time:0.00033998489379883

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1920' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029520988464355

select fname,lname,mrdno from patient_registration where  patient_registration_id='1920' and  office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007328987121582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0007328987121582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020885467529297

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.00051021575927734

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.00051021575927734

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1780' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049750804901123

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.00051021575927734

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1780' and  doctors_registration.office_id= '1' 
 Execution Time:0.0049750804901123

select fname,lname,mrdno from patient_registration where  patient_registration_id='1780' and  office_id= '1' 
 Execution Time:0.00046682357788086

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0029590129852295

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0029590129852295

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0011529922485352

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056099891662598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056099891662598

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004429817199707

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004429817199707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010340213775635

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084900856018066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005800724029541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010340213775635

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041491985321045

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070714950561523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00070714950561523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030422210693359

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045919418334961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045919418334961

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035700798034668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029277801513672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029277801513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029277801513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029277801513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029139518737793

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00079202651977539

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029277801513672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013248920440674

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036287307739258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004288911819458

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038349628448486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038349628448486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038349628448486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038349628448486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038349628448486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032680034637451

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068783760070801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089502334594727

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038349628448486

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032680034637451

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042788982391357

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018215179443359

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034618377685547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034618377685547

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040483474731445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065898895263672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004279613494873

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002598762512207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040483474731445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023679733276367

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060510635375977

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060510635375977

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090694427490234

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00090694427490234

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010490417480469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010490417480469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010490417480469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010490417480469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060915946960449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010490417480469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060915946960449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040409564971924

select count(*) as cnt from patient_registration where  patient_registration_id= '1752' and  office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from patient_registration where  patient_registration_id= '1752' and  office_id= '1' 
 Execution Time:0.00031208992004395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1752' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023050308227539

select count(*) as cnt from patient_registration where  patient_registration_id= '1752' and  office_id= '1' 
 Execution Time:0.00031208992004395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1752' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023050308227539

select fname,lname,mrdno from patient_registration where  patient_registration_id='1752' and  office_id= '1' 
 Execution Time:0.00023579597473145

select count(*) as cnt from patient_registration where  patient_registration_id= '1952' and  office_id= '1' 
 Execution Time:0.0005338191986084

select count(*) as cnt from patient_registration where  patient_registration_id= '1952' and  office_id= '1' 
 Execution Time:0.0005338191986084

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1952' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031671524047852

select count(*) as cnt from patient_registration where  patient_registration_id= '1952' and  office_id= '1' 
 Execution Time:0.0005338191986084

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1952' and  doctors_registration.office_id= '1' 
 Execution Time:0.0031671524047852

select fname,lname,mrdno from patient_registration where  patient_registration_id='1952' and  office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044512748718262

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00044512748718262

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035595893859863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043158531188965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043158531188965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043158531188965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017940998077393

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043158531188965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017940998077393

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043158531188965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0017940998077393

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018079280853271

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.00035595893859863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1780' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028679370880127

select count(*) as cnt from patient_registration where  patient_registration_id= '1780' and  office_id= '1' 
 Execution Time:0.00035595893859863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1780' and  doctors_registration.office_id= '1' 
 Execution Time:0.0028679370880127

select fname,lname,mrdno from patient_registration where  patient_registration_id='1780' and  office_id= '1' 
 Execution Time:0.00029706954956055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0047259330749512

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0047259330749512

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065493583679199

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.0006568431854248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025558471679688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025558471679688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025558471679688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025558471679688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025558471679688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018906593322754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018906593322754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018906593322754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018906593322754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018906593322754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060510635375977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0094211101531982

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064396858215332

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064396858215332

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022506713867188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004570484161377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004570484161377

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027921199798584

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022602081298828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038504600524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038812160491943

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073695182800293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073695182800293

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037217140197754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040507316589355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067281723022461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067281723022461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067281723022461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067281723022461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089287757873535

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077486038208008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00067281723022461

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00089287757873535

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037119388580322

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060009956359863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060009956359863

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061988830566406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00061988830566406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062084197998047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062084197998047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062084197998047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062084197998047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096011161804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00077390670776367

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00062084197998047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00096011161804199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041100978851318

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002901554107666

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002901554107666

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00021100044250488

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00054597854614258

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00089001655578613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040316581726074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040316581726074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040316581726074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040316581726074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063681602478027

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040316581726074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047397613525391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037720203399658

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00098204612731934

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00098204612731934

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074315071105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074315071105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074315071105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074315071105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011889934539795

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00069999694824219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00074315071105957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052309036254883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053095817565918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038678646087646

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032186508178711

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from patient_registration where  patient_registration_id= '241' and  office_id= '1' 
 Execution Time:0.0010879039764404

select count(*) as cnt from patient_registration where  patient_registration_id= '241' and  office_id= '1' 
 Execution Time:0.0010879039764404

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='241' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034830570220947

select count(*) as cnt from patient_registration where  patient_registration_id= '241' and  office_id= '1' 
 Execution Time:0.0010879039764404

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='241' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034830570220947

select fname,lname,mrdno from patient_registration where  patient_registration_id='241' and  office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005340576171875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005340576171875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005340576171875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043010711669922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032210350036621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047683715820312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005620002746582

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057387351989746

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00057387351989746

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00025415420532227

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00052404403686523

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012362003326416

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012362003326416

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047922134399414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002655029296875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060319900512695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041389465332031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047922134399414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004080057144165

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021040439605713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010280609130859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039100646972656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017938613891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021040439605713

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044691562652588

select count(*) as cnt from patient_registration where  patient_registration_id= '1886' and  office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_registration where  patient_registration_id= '1886' and  office_id= '1' 
 Execution Time:0.0003809928894043

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1886' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020661354064941

select count(*) as cnt from patient_registration where  patient_registration_id= '1886' and  office_id= '1' 
 Execution Time:0.0003809928894043

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1886' and  doctors_registration.office_id= '1' 
 Execution Time:0.0020661354064941

select fname,lname,mrdno from patient_registration where  patient_registration_id='1886' and  office_id= '1' 
 Execution Time:0.00099301338195801

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066089630126953

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00066089630126953

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00035619735717773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029079914093018

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029079914093018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029079914093018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025761127471924

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029079914093018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025761127471924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029079914093018

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0025761127471924

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00088191032409668

select count(*) as cnt from patient_registration where  patient_registration_id= '2010' and  office_id= '1' 
 Execution Time:0.00048089027404785

select count(*) as cnt from patient_registration where  patient_registration_id= '2010' and  office_id= '1' 
 Execution Time:0.00048089027404785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2010' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029749870300293

select count(*) as cnt from patient_registration where  patient_registration_id= '2010' and  office_id= '1' 
 Execution Time:0.00048089027404785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2010' and  doctors_registration.office_id= '1' 
 Execution Time:0.0029749870300293

select fname,lname,mrdno from patient_registration where  patient_registration_id='2010' and  office_id= '1' 
 Execution Time:0.00026082992553711

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019187927246094

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0019187927246094

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034189224243164

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00074887275695801

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.002716064453125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0044310092926025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001741886138916

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.002716064453125

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037217140197754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024459362030029

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053000450134277

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053000450134277

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002589225769043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012648105621338

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012648105621338

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015401840209961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015401840209961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015401840209961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005791187286377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015401840209961

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017595291137695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005791187286377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002418041229248

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069808959960938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069808959960938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031781196594238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042986869812012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018405914306641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018405914306641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018405914306641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062298774719238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050592422485352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032615661621094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018405914306641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020980834960938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073409080505371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033740997314453

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0007011890411377

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0007011890411377

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001533031463623

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001533031463623

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039150714874268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031185150146484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047397613525391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027549266815186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025529861450195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025529861450195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025529861450195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025529861450195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0025529861450195

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select count(*) as cnt from patient_registration where  patient_registration_id= '2014' and  office_id= '1' 
 Execution Time:0.00048518180847168

select count(*) as cnt from patient_registration where  patient_registration_id= '2014' and  office_id= '1' 
 Execution Time:0.00048518180847168

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2014' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033228397369385

select count(*) as cnt from patient_registration where  patient_registration_id= '2014' and  office_id= '1' 
 Execution Time:0.00048518180847168

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2014' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033228397369385

select fname,lname,mrdno from patient_registration where  patient_registration_id='2014' and  office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088286399841309

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00088286399841309

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035905838012695

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00072693824768066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003931999206543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060009956359863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021815299987793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077199935913086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040490627288818

select count(*) as cnt from patient_registration where  patient_registration_id= '1449' and  office_id= '1' 
 Execution Time:0.00085806846618652

select count(*) as cnt from patient_registration where  patient_registration_id= '1449' and  office_id= '1' 
 Execution Time:0.00085806846618652

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1449' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023767948150635

select count(*) as cnt from patient_registration where  patient_registration_id= '1449' and  office_id= '1' 
 Execution Time:0.00085806846618652

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1449' and  doctors_registration.office_id= '1' 
 Execution Time:0.0023767948150635

select fname,lname,mrdno from patient_registration where  patient_registration_id='1449' and  office_id= '1' 
 Execution Time:0.0002288818359375

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048589706420898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00019001960754395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0035779476165771

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010819435119629

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0022439956665039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075292587280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075292587280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075292587280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032529830932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075292587280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032529830932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095891952514648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025739669799805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072813034057617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015079975128174

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00075292587280273

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032529830932617

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00095891952514648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0065929889678955

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0029311180114746

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00072717666625977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014421939849854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014421939849854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014421939849854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014421939849854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0008699893951416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014421939849854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0008699893951416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014421939849854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0008699893951416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014421939849854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0008699893951416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011839866638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0014421939849854

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010731220245361

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00075507164001465

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0008699893951416

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011839866638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028021335601807

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0018179416656494

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00047993659973145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00066208839416504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00042581558227539

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026087760925293

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00057196617126465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051283836364746

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00077009201049805

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00069594383239746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00043511390686035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00037884712219238

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020718574523926

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 42 
 Execution Time:0.00039815902709961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016999244689941


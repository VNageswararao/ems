select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037198066711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037198066711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020558834075928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037198066711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020558834075928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027830600738525

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037198066711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020558834075928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027830600738525

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014991760253906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037198066711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020558834075928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027830600738525

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014991760253906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037198066711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020558834075928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027830600738525

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014991760253906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017919540405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019590854644775

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037198066711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0020558834075928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027830600738525

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014991760253906

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017919540405273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087499618530273

select count(*) as cnt from patient_registration where  patient_registration_id= '498' and  office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from patient_registration where  patient_registration_id= '498' and  office_id= '1' 
 Execution Time:0.00037598609924316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='498' and  doctors_registration.office_id= '1' 
 Execution Time:0.00091910362243652

select count(*) as cnt from patient_registration where  patient_registration_id= '498' and  office_id= '1' 
 Execution Time:0.00037598609924316

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='498' and  doctors_registration.office_id= '1' 
 Execution Time:0.00091910362243652

select fname,lname,mrdno from patient_registration where  patient_registration_id='498' and  office_id= '1' 
 Execution Time:0.00017404556274414

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00050902366638184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00019192695617676

select count(*) as cnt from patient_registration where  patient_registration_id= '625' and  office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_registration where  patient_registration_id= '625' and  office_id= '1' 
 Execution Time:0.00039505958557129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='625' and  doctors_registration.office_id= '1' 
 Execution Time:0.00092101097106934

select count(*) as cnt from patient_registration where  patient_registration_id= '625' and  office_id= '1' 
 Execution Time:0.00039505958557129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='625' and  doctors_registration.office_id= '1' 
 Execution Time:0.00092101097106934

select fname,lname,mrdno from patient_registration where  patient_registration_id='625' and  office_id= '1' 
 Execution Time:0.0001680850982666

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045919418334961

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00045919418334961

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066089630126953

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033116340637207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028014183044434

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030016899108887

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009768009185791

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051593780517578

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020194053649902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045895576477051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007929801940918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033807754516602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016138553619385

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00031208992004395

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00031208992004395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.00078296661376953

select count(*) as cnt from patient_registration where  patient_registration_id= '250' and  office_id= '1' 
 Execution Time:0.00031208992004395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='250' and  doctors_registration.office_id= '1' 
 Execution Time:0.00078296661376953

select fname,lname,mrdno from patient_registration where  patient_registration_id='250' and  office_id= '1' 
 Execution Time:0.0001521110534668

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040006637573242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030517578125

select count(*) as cnt from patient_registration where  patient_registration_id= '433' and  office_id= '1' 
 Execution Time:0.00044012069702148

select count(*) as cnt from patient_registration where  patient_registration_id= '433' and  office_id= '1' 
 Execution Time:0.00044012069702148

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='433' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012719631195068

select count(*) as cnt from patient_registration where  patient_registration_id= '433' and  office_id= '1' 
 Execution Time:0.00044012069702148

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='433' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012719631195068

select fname,lname,mrdno from patient_registration where  patient_registration_id='433' and  office_id= '1' 
 Execution Time:0.00026082992553711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005791187286377

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005791187286377

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038313865661621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046801567077637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00079703330993652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036382675170898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046801567077637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015640258789062

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.0043699741363525

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.0043699741363525

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055489540100098

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.0043699741363525

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0055489540100098

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056600570678711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003819465637207

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047612190246582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047612190246582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025010108947754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041413307189941

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045990943908691

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026798248291016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035881996154785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011138916015625

select count(*) as cnt from patient_registration where  patient_registration_id= '498' and  office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from patient_registration where  patient_registration_id= '498' and  office_id= '1' 
 Execution Time:0.0003659725189209

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='498' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010671615600586

select count(*) as cnt from patient_registration where  patient_registration_id= '498' and  office_id= '1' 
 Execution Time:0.0003659725189209

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='498' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010671615600586

select fname,lname,mrdno from patient_registration where  patient_registration_id='498' and  office_id= '1' 
 Execution Time:0.00021195411682129

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00079989433288574

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00079989433288574

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062108039855957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006248950958252

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033092498779297

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062108039855957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016942024230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063920021057129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037193298339844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034904479980469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050210952758789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017750263214111

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030803680419922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0012130737304688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046515464782715

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046515464782715

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003211498260498

select count(*) as cnt from patient_registration where  patient_registration_id= '498' and  office_id= '1' 
 Execution Time:0.00032877922058105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052404403686523

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034189224243164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00018596649169922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035440921783447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035440921783447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035440921783447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035905838012695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035440921783447

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015637874603271

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0019989013671875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0019989013671875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092697143554688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042200088500977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004420280456543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016372203826904

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047492980957031

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047492980957031

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026893615722656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033268928527832

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033268928527832

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0029830932617188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0088272094726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0088272094726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035090446472168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0088272094726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035090446472168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0088272094726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035090446472168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027589797973633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0088272094726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035090446472168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027589797973633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0088272094726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035090446472168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027589797973633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.008544921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0088272094726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035090446472168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027589797973633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.008544921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011351108551025

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0088272094726562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0035090446472168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0038919448852539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0027589797973633

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00093698501586914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.008544921875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011351108551025

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051219463348389

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004730224609375

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063109397888184

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063109397888184

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038719177246094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031280517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031280517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031280517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031280517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050616264343262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031280517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030994415283203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005190372467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001600980758667

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030288696289062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030288696289062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0030288696289062

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0023708343505859

select count(*) as cnt from patient_registration where  patient_registration_id= '683' and  office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from patient_registration where  patient_registration_id= '683' and  office_id= '1' 
 Execution Time:0.0003669261932373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='683' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084710121154785

select count(*) as cnt from patient_registration where  patient_registration_id= '683' and  office_id= '1' 
 Execution Time:0.0003669261932373

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='683' and  doctors_registration.office_id= '1' 
 Execution Time:0.00084710121154785

select fname,lname,mrdno from patient_registration where  patient_registration_id='683' and  office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025689601898193

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025689601898193

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039505958557129

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016307830810547

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016307830810547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016307830810547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012948513031006

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016307830810547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012948513031006

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016307830810547

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0012948513031006

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061416625976562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016260147094727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012359619140625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00021004676818848

select count(*) as cnt from patient_registration where  patient_registration_id= '681' and  office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from patient_registration where  patient_registration_id= '681' and  office_id= '1' 
 Execution Time:0.00038504600524902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='681' and  doctors_registration.office_id= '1' 
 Execution Time:0.00085020065307617

select count(*) as cnt from patient_registration where  patient_registration_id= '681' and  office_id= '1' 
 Execution Time:0.00038504600524902

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='681' and  doctors_registration.office_id= '1' 
 Execution Time:0.00085020065307617

select fname,lname,mrdno from patient_registration where  patient_registration_id='681' and  office_id= '1' 
 Execution Time:0.00018310546875

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054001808166504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054001808166504

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010781288146973

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0006248950958252

select * from investigation where  investigation_id=6  and office_id= 1 and status=1 
 Execution Time:0.00041699409484863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014801025390625

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025415420532227

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014901161193848

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00030803680419922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select count(*) as cnt from patient_registration where  patient_registration_id= '247' and  office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from patient_registration where  patient_registration_id= '247' and  office_id= '1' 
 Execution Time:0.00043392181396484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='247' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014348030090332

select count(*) as cnt from patient_registration where  patient_registration_id= '247' and  office_id= '1' 
 Execution Time:0.00043392181396484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='247' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014348030090332

select fname,lname,mrdno from patient_registration where  patient_registration_id='247' and  office_id= '1' 
 Execution Time:0.00033998489379883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052809715270996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031709671020508

select count(*) as cnt from patient_registration where  patient_registration_id= '664' and  office_id= '1' 
 Execution Time:0.00049996376037598

select count(*) as cnt from patient_registration where  patient_registration_id= '664' and  office_id= '1' 
 Execution Time:0.00049996376037598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='664' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013589859008789

select count(*) as cnt from patient_registration where  patient_registration_id= '664' and  office_id= '1' 
 Execution Time:0.00049996376037598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='664' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013589859008789

select fname,lname,mrdno from patient_registration where  patient_registration_id='664' and  office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055980682373047

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055980682373047

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from patient_registration where  patient_registration_id= '571' and  office_id= '1' 
 Execution Time:0.00065088272094727

select count(*) as cnt from patient_registration where  patient_registration_id= '571' and  office_id= '1' 
 Execution Time:0.00065088272094727

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='571' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036439895629883

select count(*) as cnt from patient_registration where  patient_registration_id= '571' and  office_id= '1' 
 Execution Time:0.00065088272094727

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='571' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036439895629883

select fname,lname,mrdno from patient_registration where  patient_registration_id='571' and  office_id= '1' 
 Execution Time:0.0042130947113037

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040006637573242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_registration where  patient_registration_id= '100' and  office_id= '1' 
 Execution Time:0.00035190582275391

select count(*) as cnt from patient_registration where  patient_registration_id= '100' and  office_id= '1' 
 Execution Time:0.00035190582275391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='100' and  doctors_registration.office_id= '1' 
 Execution Time:0.00093293190002441

select count(*) as cnt from patient_registration where  patient_registration_id= '100' and  office_id= '1' 
 Execution Time:0.00035190582275391

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='100' and  doctors_registration.office_id= '1' 
 Execution Time:0.00093293190002441

select fname,lname,mrdno from patient_registration where  patient_registration_id='100' and  office_id= '1' 
 Execution Time:0.00018501281738281

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048995018005371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022411346435547

select count(*) as cnt from patient_registration where  patient_registration_id= '392' and  office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from patient_registration where  patient_registration_id= '392' and  office_id= '1' 
 Execution Time:0.00037002563476562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='392' and  doctors_registration.office_id= '1' 
 Execution Time:0.0009009838104248

select count(*) as cnt from patient_registration where  patient_registration_id= '392' and  office_id= '1' 
 Execution Time:0.00037002563476562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='392' and  doctors_registration.office_id= '1' 
 Execution Time:0.0009009838104248

select fname,lname,mrdno from patient_registration where  patient_registration_id='392' and  office_id= '1' 
 Execution Time:0.00016903877258301

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004119873046875

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00015997886657715

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072503089904785

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00072503089904785

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046396255493164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056004524230957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056004524230957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056004524230957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073909759521484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057196617126465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00056004524230957

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00073909759521484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014410018920898

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050091743469238

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050091743469238

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055480003356934

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055480003356934

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055217742919922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055217742919922

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051784515380859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005488395690918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014550685882568

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058221817016602

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058221817016602

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049710273742676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049710273742676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002598762512207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027680397033691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027680397033691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055289268493652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015981197357178

select count(*) as cnt from patient_registration where  patient_registration_id= '348' and  office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from patient_registration where  patient_registration_id= '348' and  office_id= '1' 
 Execution Time:0.00035691261291504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='348' and  doctors_registration.office_id= '1' 
 Execution Time:0.00087213516235352

select count(*) as cnt from patient_registration where  patient_registration_id= '348' and  office_id= '1' 
 Execution Time:0.00035691261291504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='348' and  doctors_registration.office_id= '1' 
 Execution Time:0.00087213516235352

select fname,lname,mrdno from patient_registration where  patient_registration_id='348' and  office_id= '1' 
 Execution Time:0.00019407272338867

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039792060852051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031685829162598

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051093101501465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038909912109375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055813789367676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055813789367676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034208297729492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034208297729492

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037178993225098

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034208297729492

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037178993225098

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034208297729492

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037178993225098

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036280155181885

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069117546081543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011670589447021

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034208297729492

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037178993225098

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00079894065856934

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0036280155181885

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0040237903594971

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036787986755371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039911270141602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028419494628906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052189826965332

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023078918457031

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034499168395996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001492977142334

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049090385437012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029158592224121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029158592224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029158592224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018157958984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029158592224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018157958984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029158592224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018157958984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024371147155762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029158592224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018157958984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024371147155762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029158592224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018157958984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024371147155762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0060129165649414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0029158592224121

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0024738311767578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018157958984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00086498260498047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0024371147155762

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087594985961914

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0060129165649414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004511833190918

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00048613548278809

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00048613548278809

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0002591609954834

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048708915710449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003831148147583

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003831148147583

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038731098175049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003831148147583

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038731098175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003831148147583

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038731098175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003831148147583

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038731098175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021359920501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041749477386475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049901008605957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003831148147583

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038731098175049

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029001235961914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026419162750244

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021359920501709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.012555122375488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017719268798828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089001655578613

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select count(*) as cnt from patient_registration where  patient_registration_id= '392' and  office_id= '1' 
 Execution Time:0.00039386749267578

select count(*) as cnt from patient_registration where  patient_registration_id= '392' and  office_id= '1' 
 Execution Time:0.00039386749267578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='392' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011410713195801

select count(*) as cnt from patient_registration where  patient_registration_id= '392' and  office_id= '1' 
 Execution Time:0.00039386749267578

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='392' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011410713195801

select fname,lname,mrdno from patient_registration where  patient_registration_id='392' and  office_id= '1' 
 Execution Time:0.00020408630371094

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070905685424805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00070905685424805

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032186508178711

select * from investigation where  investigation_id=4  and office_id= 1 and status=1 
 Execution Time:0.00050210952758789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011601448059082

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011601448059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011601448059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011601448059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011601448059082

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00025582313537598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060701370239258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060701370239258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060701370239258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059223175048828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060701370239258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00148606300354

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059223175048828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015950202941895

select count(*) as cnt from patient_registration where  patient_registration_id= '249' and  office_id= '1' 
 Execution Time:0.00038409233093262

select count(*) as cnt from patient_registration where  patient_registration_id= '249' and  office_id= '1' 
 Execution Time:0.00038409233093262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='249' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010409355163574

select count(*) as cnt from patient_registration where  patient_registration_id= '249' and  office_id= '1' 
 Execution Time:0.00038409233093262

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='249' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010409355163574

select fname,lname,mrdno from patient_registration where  patient_registration_id='249' and  office_id= '1' 
 Execution Time:0.00038814544677734

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043487548828125

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043487548828125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033712387084961

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00057482719421387

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00057482719421387

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031089782714844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031089782714844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00024986267089844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045108795166016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045108795166016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049209594726562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029206275939941

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017094612121582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049209594726562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030410289764404

select count(*) as cnt from patient_registration where  patient_registration_id= '504' and  office_id= '1' 
 Execution Time:0.00046300888061523

select count(*) as cnt from patient_registration where  patient_registration_id= '504' and  office_id= '1' 
 Execution Time:0.00046300888061523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='504' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013041496276855

select count(*) as cnt from patient_registration where  patient_registration_id= '504' and  office_id= '1' 
 Execution Time:0.00046300888061523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='504' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013041496276855

select fname,lname,mrdno from patient_registration where  patient_registration_id='504' and  office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022339820861816

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0022339820861816

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0027978420257568

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00078296661376953

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00078296661376953

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00076484680175781

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00041294097900391

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00023007392883301

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058197975158691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058197975158691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00054001808166504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0067789554595947

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0067789554595947

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0058341026306152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029993057250977

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027298927307129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00037622451782227

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00037622451782227

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00016617774963379

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051999092102051

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039291381835938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036907196044922

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022411346435547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067806243896484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067806243896484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053596496582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035500526428223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015590190887451

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055313110351562

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055313110351562

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029921531677246

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049686431884766

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033650398254395

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033650398254395

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003911018371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003669261932373

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030517578125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012979507446289

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015048980712891

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0015048980712891

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053906440734863

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053906440734863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043582916259766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002131462097168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031685829162598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0003969669342041

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00023317337036133

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00055384635925293

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00055384635925293

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026688575744629

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026688575744629

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056910514831543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031208992004395

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018570423126221

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041913986206055

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041913986206055

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027608871459961

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00057697296142578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017714500427246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017714500427246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017714500427246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017714500427246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017714500427246

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00013494491577148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0002899169921875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00090694427490234

select count(*) as cnt from patient_registration where  patient_registration_id= '586' and  office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from patient_registration where  patient_registration_id= '586' and  office_id= '1' 
 Execution Time:0.00042200088500977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='586' and  doctors_registration.office_id= '1' 
 Execution Time:0.001450777053833

select count(*) as cnt from patient_registration where  patient_registration_id= '586' and  office_id= '1' 
 Execution Time:0.00042200088500977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='586' and  doctors_registration.office_id= '1' 
 Execution Time:0.001450777053833

select fname,lname,mrdno from patient_registration where  patient_registration_id='586' and  office_id= '1' 
 Execution Time:0.00030112266540527

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014760494232178

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0014760494232178

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030016899108887

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014519691467285

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033116340637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020503997802734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00033116340637207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019938945770264

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017359256744385

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select count(*) as cnt from patient_registration where  patient_registration_id= '702' and  office_id= '1' 
 Execution Time:0.00025105476379395

select count(*) as cnt from patient_registration where  patient_registration_id= '702' and  office_id= '1' 
 Execution Time:0.00025105476379395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='702' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012619495391846

select count(*) as cnt from patient_registration where  patient_registration_id= '702' and  office_id= '1' 
 Execution Time:0.00025105476379395

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='702' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012619495391846

select fname,lname,mrdno from patient_registration where  patient_registration_id='702' and  office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093317031860352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093317031860352

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034093856811523

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00052285194396973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037069320678711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003972053527832

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031304359436035

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.001154899597168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.001223087310791

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034403800964355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053215026855469

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026512145996094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00016689300537109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023698806762695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016093254089355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009770393371582

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00060105323791504

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00060105323791504

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00090694427490234

select count(*) as cnt from patient_registration where  patient_registration_id= '403' and  office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from patient_registration where  patient_registration_id= '403' and  office_id= '1' 
 Execution Time:0.00039911270141602

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='403' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010299682617188

select count(*) as cnt from patient_registration where  patient_registration_id= '403' and  office_id= '1' 
 Execution Time:0.00039911270141602

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='403' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010299682617188

select fname,lname,mrdno from patient_registration where  patient_registration_id='403' and  office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048685073852539

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048685073852539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00042510032653809

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039792060852051

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019717216491699

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014479160308838

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014479160308838

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0069429874420166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039982795715332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00047802925109863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024008750915527

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039982795715332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0023338794708252

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050592422485352

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050592422485352

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007321834564209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007321834564209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076630115509033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076630115509033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094180107116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076630115509033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094180107116699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076630115509033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094180107116699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076699256896973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076630115509033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094180107116699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076699256896973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076630115509033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094180107116699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076699256896973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076630115509033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094180107116699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076699256896973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0076630115509033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0094180107116699

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018739700317383

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00076699256896973

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0020079612731934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010991096496582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00014615058898926

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032782554626465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030183792114258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002751350402832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014891624450684

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054287910461426

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054287910461426

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.002086877822876

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003361701965332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003361701965332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.041287899017334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.041287899017334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.041287899017334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.041287899017334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.041287899017334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.041287899017334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.041287899017334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.041287899017334

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077605247497559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003509521484375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013020038604736

select count(*) as cnt from patient_registration where  patient_registration_id= '659' and  office_id= '1' 
 Execution Time:0.00095796585083008

select count(*) as cnt from patient_registration where  patient_registration_id= '659' and  office_id= '1' 
 Execution Time:0.00095796585083008

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='659' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014450550079346

select count(*) as cnt from patient_registration where  patient_registration_id= '659' and  office_id= '1' 
 Execution Time:0.00095796585083008

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='659' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014450550079346

select fname,lname,mrdno from patient_registration where  patient_registration_id='659' and  office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049614906311035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049614906311035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from patient_registration where  patient_registration_id= '436' and  office_id= '1' 
 Execution Time:0.0036180019378662

select count(*) as cnt from patient_registration where  patient_registration_id= '436' and  office_id= '1' 
 Execution Time:0.0036180019378662

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='436' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037870407104492

select count(*) as cnt from patient_registration where  patient_registration_id= '436' and  office_id= '1' 
 Execution Time:0.0036180019378662

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='436' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037870407104492

select fname,lname,mrdno from patient_registration where  patient_registration_id='436' and  office_id= '1' 
 Execution Time:0.0037879943847656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039770603179932

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016520023345947

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016520023345947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016520023345947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016520023345947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016520023345947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038385391235352

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select count(*) as cnt from patient_registration where  patient_registration_id= '700' and  office_id= '1' 
 Execution Time:0.00028800964355469

select count(*) as cnt from patient_registration where  patient_registration_id= '700' and  office_id= '1' 
 Execution Time:0.00028800964355469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='700' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010490417480469

select count(*) as cnt from patient_registration where  patient_registration_id= '700' and  office_id= '1' 
 Execution Time:0.00028800964355469

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='700' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010490417480469

select fname,lname,mrdno from patient_registration where  patient_registration_id='700' and  office_id= '1' 
 Execution Time:0.00016307830810547

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006871223449707

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0006871223449707

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00040888786315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028409957885742

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028409957885742

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035390853881836

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028409957885742

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035390853881836

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.003615140914917

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00388503074646

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028409957885742

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0035390853881836

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.003615140914917

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0019741058349609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056815147399902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056815147399902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010800361633301

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014379024505615

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014379024505615

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0099802017211914

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044608116149902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072216987609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075697898864746

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045180320739746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00072216987609863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select count(*) as cnt from patient_registration where  patient_registration_id= '603' and  office_id= '1' 
 Execution Time:0.00040817260742188

select count(*) as cnt from patient_registration where  patient_registration_id= '603' and  office_id= '1' 
 Execution Time:0.00040817260742188

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='603' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012819766998291

select count(*) as cnt from patient_registration where  patient_registration_id= '603' and  office_id= '1' 
 Execution Time:0.00040817260742188

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='603' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012819766998291

select fname,lname,mrdno from patient_registration where  patient_registration_id='603' and  office_id= '1' 
 Execution Time:0.00025010108947754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014269351959229

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0014269351959229

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from patient_registration where  patient_registration_id= '603' and  office_id= '1' 
 Execution Time:0.00039410591125488

select count(*) as cnt from patient_registration where  patient_registration_id= '603' and  office_id= '1' 
 Execution Time:0.00039410591125488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='603' and  doctors_registration.office_id= '1' 
 Execution Time:0.00089406967163086

select count(*) as cnt from patient_registration where  patient_registration_id= '603' and  office_id= '1' 
 Execution Time:0.00039410591125488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='603' and  doctors_registration.office_id= '1' 
 Execution Time:0.00089406967163086

select fname,lname,mrdno from patient_registration where  patient_registration_id='603' and  office_id= '1' 
 Execution Time:0.0002129077911377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048398971557617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050711631774902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050711631774902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from patient_registration where  patient_registration_id= '603' and  office_id= '1' 
 Execution Time:0.0003058910369873

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039911270141602

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019979476928711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035476684570312

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035476684570312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033378601074219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019979476928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019979476928711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053811073303223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024700164794922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019979476928711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053811073303223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051593780517578

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051593780517578

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032305717468262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021958351135254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021958351135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025498867034912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021958351135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025498867034912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001068115234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021958351135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025498867034912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001068115234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021958351135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025498867034912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001068115234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021958351135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025498867034912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001068115234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00080394744873047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021958351135254

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025498867034912

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.001068115234375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043392181396484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014448165893555

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049304962158203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016300678253174

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00084280967712402

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055599212646484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026917457580566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024604797363281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049114227294922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016319751739502

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.004180908203125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.004180908203125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095796585083008

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004889965057373

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034904479980469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015349388122559

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046992301940918

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023579597473145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035691261291504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018558502197266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028519630432129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028519630432129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038890838623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0026021003723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043392181396484

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028519630432129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038890838623047

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0021979808807373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018401145935059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select count(*) as cnt from patient_registration where  patient_registration_id= '686' and  office_id= '1' 
 Execution Time:0.00040817260742188

select count(*) as cnt from patient_registration where  patient_registration_id= '686' and  office_id= '1' 
 Execution Time:0.00040817260742188

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='686' and  doctors_registration.office_id= '1' 
 Execution Time:0.00085783004760742

select count(*) as cnt from patient_registration where  patient_registration_id= '686' and  office_id= '1' 
 Execution Time:0.00040817260742188

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='686' and  doctors_registration.office_id= '1' 
 Execution Time:0.00085783004760742

select fname,lname,mrdno from patient_registration where  patient_registration_id='686' and  office_id= '1' 
 Execution Time:0.00019192695617676

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037908554077148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037908554077148

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049901008605957

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00063681602478027

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.0010619163513184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010428905487061

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010428905487061

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010428905487061

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010428905487061

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.012075901031494

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010428905487061

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0037000179290771

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.012075901031494

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0027849674224854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023579597473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017595291137695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00016403198242188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019383430480957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023579597473145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043590068817139

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047898292541504

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030016899108887

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032615661621094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032615661621094

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058197975158691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006110668182373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017020702362061

select count(*) as cnt from patient_registration where  patient_registration_id= '517' and  office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt from patient_registration where  patient_registration_id= '517' and  office_id= '1' 
 Execution Time:0.00046110153198242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='517' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014898777008057

select count(*) as cnt from patient_registration where  patient_registration_id= '517' and  office_id= '1' 
 Execution Time:0.00046110153198242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='517' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014898777008057

select fname,lname,mrdno from patient_registration where  patient_registration_id='517' and  office_id= '1' 
 Execution Time:0.00030016899108887

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007469654083252

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007469654083252

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017991065979004

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00074911117553711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038814544677734

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00063586235046387

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00030899047851562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.001352071762085

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00030899047851562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.001352071762085

select fname,lname,mrdno from patient_registration where  patient_registration_id='1' and  office_id= '1' 
 Execution Time:0.00027012825012207

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075888633728027

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075888633728027

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042295455932617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052905082702637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052094459533691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062799453735352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014920234680176

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00051093101501465

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002439022064209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.030976057052612

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.030976057052612

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036830902099609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052118301391602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00091099739074707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052118301391602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016911029815674

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042722225189209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042722225189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042722225189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0049600601196289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042722225189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0049600601196289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018858909606934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042722225189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0028259754180908

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0049600601196289

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0018858909606934

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0017521381378174

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00039505958557129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033299922943115

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00039505958557129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033299922943115

select fname,lname,mrdno from patient_registration where  patient_registration_id='1' and  office_id= '1' 
 Execution Time:0.00062203407287598

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039310455322266

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0039310455322266

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00388503074646

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016360282897949

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069499015808105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00069499015808105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035786628723145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084209442138672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084209442138672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049400329589844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046920776367188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040102005004883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048398971557617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select count(*) as cnt from patient_registration where  patient_registration_id= '352' and  office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from patient_registration where  patient_registration_id= '352' and  office_id= '1' 
 Execution Time:0.0003509521484375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='352' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011439323425293

select count(*) as cnt from patient_registration where  patient_registration_id= '352' and  office_id= '1' 
 Execution Time:0.0003509521484375

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='352' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011439323425293

select fname,lname,mrdno from patient_registration where  patient_registration_id='352' and  office_id= '1' 
 Execution Time:0.00023984909057617

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055813789367676

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00055813789367676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0050249099731445

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005497932434082

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005497932434082

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025510787963867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025510787963867

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020899772644043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020899772644043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020899772644043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020899772644043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020899772644043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079798698425293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017919540405273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select count(*) as cnt from patient_registration where  patient_registration_id= '659' and  office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from patient_registration where  patient_registration_id= '659' and  office_id= '1' 
 Execution Time:0.00046396255493164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='659' and  doctors_registration.office_id= '1' 
 Execution Time:0.00099396705627441

select count(*) as cnt from patient_registration where  patient_registration_id= '659' and  office_id= '1' 
 Execution Time:0.00046396255493164

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='659' and  doctors_registration.office_id= '1' 
 Execution Time:0.00099396705627441

select fname,lname,mrdno from patient_registration where  patient_registration_id='659' and  office_id= '1' 
 Execution Time:0.00018000602722168

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083613395690918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00083613395690918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0004429817199707

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00052094459533691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012209415435791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00052595138549805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.00095200538635254

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00052595138549805

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.00095200538635254

select fname,lname,mrdno from patient_registration where  patient_registration_id='1' and  office_id= '1' 
 Execution Time:0.00020718574523926

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066494941711426

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00066494941711426

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00039005279541016

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00059294700622559

select * from investigation where  investigation_id=14  and office_id= 1 and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035715103149414

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00013995170593262

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00013399124145508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00012707710266113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014495849609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00021100044250488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010151863098145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045013427734375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045013427734375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045013427734375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076198577880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045013427734375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00076198577880859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015368461608887

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064396858215332

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00064396858215332

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040102005004883

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0001978874206543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00068497657775879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003669261932373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003669261932373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003669261932373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003669261932373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088906288146973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003669261932373

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013070106506348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017960071563721

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select count(*) as cnt from patient_registration where  patient_registration_id= '706' and  office_id= '1' 
 Execution Time:0.00035810470581055

select count(*) as cnt from patient_registration where  patient_registration_id= '706' and  office_id= '1' 
 Execution Time:0.00035810470581055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='706' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015730857849121

select count(*) as cnt from patient_registration where  patient_registration_id= '706' and  office_id= '1' 
 Execution Time:0.00035810470581055

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='706' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015730857849121

select fname,lname,mrdno from patient_registration where  patient_registration_id='706' and  office_id= '1' 
 Execution Time:0.0004580020904541

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093507766723633

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00093507766723633

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037002563476562

select * from investigation where  investigation_id=5  and office_id= 1 and status=1 
 Execution Time:0.00051093101501465

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00050711631774902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001093864440918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0001370906829834

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026488304138184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042200088500977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010130405426025

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074481964111328

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074481964111328

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025105476379395

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037622451782227

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037622451782227

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055217742919922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049591064453125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00055217742919922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016670227050781

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003049373626709

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0001680850982666

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033211708068848

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030791759490967

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030791759490967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030791759490967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030791759490967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030791759490967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030791759490967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010848045349121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0034580230712891

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030791759490967

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042009353637695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026297569274902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00083398818969727

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010848045349121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015988349914551

select count(*) as cnt from patient_registration where  patient_registration_id= '488' and  office_id= '1' 
 Execution Time:0.00062894821166992

select count(*) as cnt from patient_registration where  patient_registration_id= '488' and  office_id= '1' 
 Execution Time:0.00062894821166992

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='488' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016257762908936

select count(*) as cnt from patient_registration where  patient_registration_id= '488' and  office_id= '1' 
 Execution Time:0.00062894821166992

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='488' and  doctors_registration.office_id= '1' 
 Execution Time:0.0016257762908936

select fname,lname,mrdno from patient_registration where  patient_registration_id='488' and  office_id= '1' 
 Execution Time:0.00027084350585938

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024509429931641

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032880306243896

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0032880306243896

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031018257141113

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003209114074707

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003209114074707

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00021100044250488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029301643371582

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047707557678223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013508796691895

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036959648132324

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036959648132324

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0026321411132812

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010719299316406

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010719299316406

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003049373626709

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018019676208496

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058794021606445

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058794021606445

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023579597473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040888786315918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072216987609863

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041103363037109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029110908508301

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040888786315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013420581817627

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011310577392578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073385238647461

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00073385238647461

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00032877922058105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087809562683105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00087809562683105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00064301490783691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030708312988281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016319751739502

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048995018005371

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00048995018005371

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00018596649169922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020909309387207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00012993812561035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040793418884277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00091695785522461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008234977722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008234977722168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008234977722168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008234977722168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008234977722168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008234977722168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004432201385498

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013871192932129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.008234977722168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040793418884277

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0010240077972412

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004432201385498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0028679370880127

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041604042053223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041604042053223

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00080084800720215

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040507316589355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059294700622559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036907196044922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059294700622559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016210079193115

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003960132598877

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034499168395996

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043511390686035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043511390686035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058388710021973

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033020973205566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031399726867676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042414665222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056910514831543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015721321105957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031402111053467

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031402111053467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076818466186523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031402111053467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076818466186523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031402111053467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076818466186523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031402111053467

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076818466186523

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0038559436798096

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0020320415496826

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0034070014953613

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.0003199577331543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='722' and  doctors_registration.office_id= '1' 
 Execution Time:0.0009150505065918

select count(*) as cnt from patient_registration where  patient_registration_id= '722' and  office_id= '1' 
 Execution Time:0.0003199577331543

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='722' and  doctors_registration.office_id= '1' 
 Execution Time:0.0009150505065918

select fname,lname,mrdno from patient_registration where  patient_registration_id='722' and  office_id= '1' 
 Execution Time:0.00017595291137695

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080108642578125

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00080108642578125

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00032591819763184

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00055098533630371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015380382537842

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052881240844727

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00078105926513672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042319297790527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050187110900879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018000602722168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001530647277832

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042319297790527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009310245513916

select count(*) as cnt from patient_registration where  patient_registration_id= '159' and  office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from patient_registration where  patient_registration_id= '159' and  office_id= '1' 
 Execution Time:0.00052404403686523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='159' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014021396636963

select count(*) as cnt from patient_registration where  patient_registration_id= '159' and  office_id= '1' 
 Execution Time:0.00052404403686523

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='159' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014021396636963

select fname,lname,mrdno from patient_registration where  patient_registration_id='159' and  office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0047881603240967

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0047881603240967

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0044710636138916

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052714347839355

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052714347839355

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069689750671387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00073599815368652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0004580020904541

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069689750671387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005033016204834

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005640983581543

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005640983581543

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046992301940918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003361701965332

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025391578674316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022506713867188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038790702819824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011091232299805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048112869262695

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048112869262695

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022792816162109

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037884712219238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037884712219238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026679039001465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046491622924805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046491622924805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012509822845459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001716136932373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001716136932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001716136932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001716136932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001716136932373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00072908401489258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00053095817565918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019717216491699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019717216491699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019717216491699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019717216491699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041389465332031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019717216491699

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00079798698425293

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014729499816895

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012516975402832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012516975402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012707710266113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012516975402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012707710266113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012516975402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012707710266113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012516975402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012707710266113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00042390823364258

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012516975402832

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012707710266113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00015091896057129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016307830810547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023603439331055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053789615631104

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053789615631104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053789615631104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053789615631104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053789615631104

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036907196044922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018501281738281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036907196044922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010168552398682

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049805641174316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049805641174316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from patient_registration where  patient_registration_id= '243' and  office_id= '1' 
 Execution Time:0.00043392181396484

select count(*) as cnt from patient_registration where  patient_registration_id= '243' and  office_id= '1' 
 Execution Time:0.00043392181396484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='243' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014159679412842

select count(*) as cnt from patient_registration where  patient_registration_id= '243' and  office_id= '1' 
 Execution Time:0.00043392181396484

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='243' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014159679412842

select fname,lname,mrdno from patient_registration where  patient_registration_id='243' and  office_id= '1' 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025606155395508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023818016052246

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040602684020996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010809898376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022506713867188

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038290023803711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001802921295166

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058603286743164

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058603286743164

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032210350036621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072002410888672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072002410888672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007789134979248

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049114227294922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00070405006408691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043487548828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047149658203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049710273742676

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015559196472168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052714347839355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047612190246582

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00039315223693848

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00039315223693848

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='724' and  doctors_registration.office_id= '1' 
 Execution Time:0.001060962677002

select count(*) as cnt from patient_registration where  patient_registration_id= '724' and  office_id= '1' 
 Execution Time:0.00039315223693848

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='724' and  doctors_registration.office_id= '1' 
 Execution Time:0.001060962677002

select fname,lname,mrdno from patient_registration where  patient_registration_id='724' and  office_id= '1' 
 Execution Time:0.00023412704467773

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016310214996338

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016310214996338

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00056004524230957

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00041103363037109

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017509460449219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017509460449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017509460449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017509460449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017509460449219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078487396240234

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029516220092773

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053501129150391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024120807647705

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005950927734375

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005950927734375

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026106834411621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046920776367188

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046920776367188

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045680999755859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074410438537598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045680999755859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041794776916504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074410438537598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034661293029785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00199294090271

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00034117698669434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011780261993408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011780261993408

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011780261993408

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011780261993408

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042414665222168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047707557678223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011780261993408

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042414665222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018160343170166

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058794021606445

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00058794021606445

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037384033203125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045180320739746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045180320739746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039196014404297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015902519226074

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00015711784362793

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00023889541625977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096893310546875

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050687789916992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050687789916992

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002591609954834

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045013427734375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045013427734375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026822090148926

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038838386535645

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038838386535645

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038838386535645

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037648677825928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038838386535645

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037648677825928

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023040771484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038838386535645

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037648677825928

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023040771484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032520294189453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038838386535645

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037648677825928

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023040771484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032520294189453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033309459686279

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035350322723389

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0038838386535645

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037829875946045

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037648677825928

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0023040771484375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032520294189453

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0033309459686279

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037751197814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019407272338867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019407272338867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019407272338867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019407272338867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019407272338867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032782554626465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018191337585449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046205520629883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099992752075195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027918815612793

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001380443572998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046896934509277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098109245300293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049591064453125

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028705596923828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053811073303223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005500316619873

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034420490264893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034420490264893

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034420490264893

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038959980010986

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034420490264893

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038959980010986

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034420490264893

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038959980010986

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044350624084473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034420490264893

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038959980010986

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044350624084473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0063440799713135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028200149536133

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0034420490264893

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038959980010986

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038108825683594

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0044350624084473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0063440799713135

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0026590824127197

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017609596252441

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052499771118164

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023412704467773

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015490055084229

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select count(*) as cnt from patient_registration where  patient_registration_id= '159' and  office_id= '1' 
 Execution Time:0.0002892017364502

select count(*) as cnt from patient_registration where  patient_registration_id= '159' and  office_id= '1' 
 Execution Time:0.0002892017364502

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='159' and  doctors_registration.office_id= '1' 
 Execution Time:0.00078010559082031

select count(*) as cnt from patient_registration where  patient_registration_id= '159' and  office_id= '1' 
 Execution Time:0.0002892017364502

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='159' and  doctors_registration.office_id= '1' 
 Execution Time:0.00078010559082031

select fname,lname,mrdno from patient_registration where  patient_registration_id='159' and  office_id= '1' 
 Execution Time:0.00019598007202148

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032858848571777

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0032858848571777

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00027704238891602

select * from ipdcharge where  ipdcharge_id=9  and office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00052404403686523

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00052404403686523

select patient_registration_id,mobileno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00073599815368652

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00066208839416504

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00066208839416504

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00092911720275879

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00065398216247559

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00065398216247559

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015251636505127

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00065398216247559

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0015251636505127

select fname,lname,mrdno from patient_registration where  patient_registration_id='1' and  office_id= '1' 
 Execution Time:0.00034308433532715

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057005882263184

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00057005882263184

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089502334594727

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00089502334594727

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037908554077148

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.004443883895874

select count(*) as cnt from injection where  office_id= 1 and status=1 
 Execution Time:0.004443883895874

select * from injection where  office_id= 1 and status=1 
 Execution Time:0.00035309791564941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011658668518066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-23' and  '2021-09-23' and  billing_master.office_id= 1        
 Execution Time:0.00084590911865234

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-23' and  '2021-09-23' and  billing_master.office_id= 1        
 Execution Time:0.00084590911865234

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-09-23' and '2021-09-23' and  patient_registration.office_id= 1      
 Execution Time:0.0023150444030762

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015411376953125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015411376953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017881393432617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0015411376953125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010790824890137

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024986267089844

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select count(*) as cnt from patient_registration where  patient_registration_id= '664' and  office_id= '1' 
 Execution Time:0.00043797492980957

select count(*) as cnt from patient_registration where  patient_registration_id= '664' and  office_id= '1' 
 Execution Time:0.00043797492980957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='664' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013267993927002

select count(*) as cnt from patient_registration where  patient_registration_id= '664' and  office_id= '1' 
 Execution Time:0.00043797492980957

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='664' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013267993927002

select fname,lname,mrdno from patient_registration where  patient_registration_id='664' and  office_id= '1' 
 Execution Time:0.0002589225769043

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00040006637573242

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028610229492188

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045394897460938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059199333190918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026297569274902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00018095970153809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019192695617676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045394897460938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013751983642578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031518936157227

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031518936157227

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019216537475586

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002291202545166

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025105476379395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045895576477051

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00064587593078613

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020098686218262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014829635620117

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00044417381286621

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00044417381286621

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029301643371582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016140937805176

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035881996154785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00021982192993164

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select count(*) as cnt from patient_registration where  patient_registration_id= '625' and  office_id= '1' 
 Execution Time:0.00031399726867676

select count(*) as cnt from patient_registration where  patient_registration_id= '625' and  office_id= '1' 
 Execution Time:0.00031399726867676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='625' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013179779052734

select count(*) as cnt from patient_registration where  patient_registration_id= '625' and  office_id= '1' 
 Execution Time:0.00031399726867676

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='625' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013179779052734

select fname,lname,mrdno from patient_registration where  patient_registration_id='625' and  office_id= '1' 
 Execution Time:0.00021815299987793

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042009353637695

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00042009353637695

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.00028896331787109

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.0004580020904541

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018308162689209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018308162689209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018308162689209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018308162689209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018308162689209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00054001808166504

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0010159015655518

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.0010159015655518

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00124192237854

select count(*) as cnt from billing_master where  billing_master_id= '128' and  office_id= '1' 
 Execution Time:0.0057938098907471

select count(*) as cnt from billing_master where  billing_master_id= '128' and  office_id= '1' 
 Execution Time:0.0057938098907471

select * from billing_master where  billing_master_id= '128' and  office_id= '1' 
 Execution Time:0.00038719177246094

select count(*) as cnt from billing_master where  billing_master_id= '128' and  office_id= '1' 
 Execution Time:0.0057938098907471

select * from billing_master where  billing_master_id= '128' and  office_id= '1' 
 Execution Time:0.00038719177246094

select * from billing_detail where  billing_master_id= '128' 
 Execution Time:0.00048494338989258

select count(*) as cnt from billing_master where  billing_master_id= '128' and  office_id= '1' 
 Execution Time:0.0057938098907471

select * from billing_master where  billing_master_id= '128' and  office_id= '1' 
 Execution Time:0.00038719177246094

select * from billing_detail where  billing_master_id= '128' 
 Execution Time:0.00048494338989258

select * from ipdcharge where  ipdcharge_id=1  and office_id= 1 and status=1 
 Execution Time:0.00029492378234863

select count(*) as cnt from patient_registration where  patient_registration_id= '625' and  office_id= '1' 
 Execution Time:0.00055313110351562

select count(*) as cnt from patient_registration where  patient_registration_id= '625' and  office_id= '1' 
 Execution Time:0.00055313110351562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='625' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017571449279785

select count(*) as cnt from patient_registration where  patient_registration_id= '625' and  office_id= '1' 
 Execution Time:0.00055313110351562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='625' and  doctors_registration.office_id= '1' 
 Execution Time:0.0017571449279785

select fname,lname,mrdno from patient_registration where  patient_registration_id='625' and  office_id= '1' 
 Execution Time:0.00024604797363281

select count(*) as cnt from patient_registration where  patient_registration_id= '664' and  office_id= '1' 
 Execution Time:0.0012960433959961

select count(*) as cnt from patient_registration where  patient_registration_id= '664' and  office_id= '1' 
 Execution Time:0.0012960433959961

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='664' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012478828430176

select count(*) as cnt from patient_registration where  patient_registration_id= '664' and  office_id= '1' 
 Execution Time:0.0012960433959961

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='664' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012478828430176

select fname,lname,mrdno from patient_registration where  patient_registration_id='664' and  office_id= '1' 
 Execution Time:0.0010800361633301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061759948730469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0024280548095703

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026299953460693

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00086688995361328

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00093579292297363

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068187713623047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037217140197754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037503242492676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00091004371643066

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057697296142578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001967191696167

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062012672424316

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00062012672424316

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057888031005859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057888031005859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004878044128418

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00065398216247559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032711029052734

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004878044128418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016531944274902

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078487396240234

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00078487396240234

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050728321075439

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0050728321075439

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0016658306121826

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050187110900879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004570484161377

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027108192443848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032806396484375

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050187110900879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015509128570557

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045990943908691

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029206275939941

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033807754516602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019693374633789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036287307739258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00091910362243652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00091910362243652

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0031850337982178

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039315223693848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039315223693848

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074548721313477

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074548721313477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040929317474365

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074548721313477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040929317474365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074548721313477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040929317474365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074548721313477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040929317474365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074548721313477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040929317474365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022461414337158

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055289268493652

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0074548721313477

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0040929317474365

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00041604042053223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032687187194824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0022461414337158

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017189979553223

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047612190246582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00047612190246582

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025010108947754

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072216987609863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072216987609863

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017372846603394

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017372846603394

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017372846603394

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030179023742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017372846603394

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030179023742676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017372846603394

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030179023742676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017372846603394

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030179023742676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035228729248047

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.017372846603394

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002532958984375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030179023742676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0014779567718506

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056004524230957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002284049987793

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041294097900391

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00041294097900391

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00019407272338867

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00057697296142578

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041990280151367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035786628723145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022101402282715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002589225769043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037002563476562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017848014831543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011520385742188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select count(*) as cnt from patient_registration where  patient_registration_id= '735' and  office_id= '1' 
 Execution Time:0.00036001205444336

select count(*) as cnt from patient_registration where  patient_registration_id= '735' and  office_id= '1' 
 Execution Time:0.00036001205444336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='735' and  doctors_registration.office_id= '1' 
 Execution Time:0.0009770393371582

select count(*) as cnt from patient_registration where  patient_registration_id= '735' and  office_id= '1' 
 Execution Time:0.00036001205444336

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='735' and  doctors_registration.office_id= '1' 
 Execution Time:0.0009770393371582

select fname,lname,mrdno from patient_registration where  patient_registration_id='735' and  office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069904327392578

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00069904327392578

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00036096572875977

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0004878044128418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018229484558105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00022292137145996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049185752868652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048708915710449

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036787986755371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026202201843262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049185752868652

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011401176452637

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053215026855469

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00053215026855469

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056004524230957

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00056004524230957

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067281723022461

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036501884460449

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040507316589355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067281723022461

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015201568603516

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059103965759277

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059103965759277

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002899169921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060510635375977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040388107299805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015420913696289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010459423065186

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00049209594726562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select count(*) as cnt from patient_registration where  patient_registration_id= '729' and  office_id= '1' 
 Execution Time:0.00034594535827637

select count(*) as cnt from patient_registration where  patient_registration_id= '729' and  office_id= '1' 
 Execution Time:0.00034594535827637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='729' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010299682617188

select count(*) as cnt from patient_registration where  patient_registration_id= '729' and  office_id= '1' 
 Execution Time:0.00034594535827637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='729' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010299682617188

select fname,lname,mrdno from patient_registration where  patient_registration_id='729' and  office_id= '1' 
 Execution Time:0.0001671314239502

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065302848815918

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00065302848815918

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037097930908203

select * from investigation where  investigation_id=19  and office_id= 1 and status=1 
 Execution Time:0.00061488151550293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018110275268555

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018110275268555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018110275268555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018110275268555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018110275268555

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044679641723633

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022220611572266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022220611572266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022220611572266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022220611572266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022220611572266

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021886825561523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037384033203125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015530586242676

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.006234884262085

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.006234884262085

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00042414665222168

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0075709819793701

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0075709819793701

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003648042678833

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029220581054688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029220581054688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015299320220947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029220581054688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015299320220947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033810138702393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029220581054688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015299320220947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033810138702393

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030758380889893

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025439262390137

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0028278827667236

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0029289722442627

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0029220581054688

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0015299320220947

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033810138702393

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0030758380889893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050082206726074

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00048184394836426

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00048184394836426

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00020194053649902

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072503089904785

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00072503089904785

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00026106834411621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00038981437683105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043606758117676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027203559875488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049901008605957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016820430755615

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018548965454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00039410591125488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031185150146484

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select count(*) as cnt from patient_registration where  patient_registration_id= '741' and  office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_registration where  patient_registration_id= '741' and  office_id= '1' 
 Execution Time:0.00039505958557129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='741' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024449825286865

select count(*) as cnt from patient_registration where  patient_registration_id= '741' and  office_id= '1' 
 Execution Time:0.00039505958557129

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='741' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024449825286865

select fname,lname,mrdno from patient_registration where  patient_registration_id='741' and  office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010559558868408

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0010559558868408

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034904479980469

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00052404403686523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011649131774902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011649131774902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011649131774902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011649131774902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011649131774902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044894218444824

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052690505981445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031089782714844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004279613494873

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013060569763184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00142502784729

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00142502784729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00142502784729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00142502784729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00142502784729

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063300132751465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0016720294952393

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015099048614502

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076794624328613

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00076794624328613

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010521411895752

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010521411895752

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006260871887207

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073409080505371

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003511905670166

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023484230041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015401840209961

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003960132598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011439323425293

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034904479980469

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034904479980469

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00020790100097656

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054693222045898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054693222045898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057601928710938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026702880859375

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00025010108947754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035810470581055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031018257141113

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053787231445312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015740394592285

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011179447174072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056886672973633

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00030303001403809

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-23' and  '2021-09-23' and  billing_master.office_id= 1        
 Execution Time:0.00083398818969727

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-23' and  '2021-09-23' and  billing_master.office_id= 1        
 Execution Time:0.00083398818969727

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-09-23' and '2021-09-23' and  patient_registration.office_id= 1      
 Execution Time:0.0016341209411621

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00049805641174316

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00049805641174316

select patient_registration_id,address from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0010678768157959

select count(*) as cnt from patient_registration where  patient_registration_id= '150' and  office_id= '1' 
 Execution Time:0.0002901554107666

select count(*) as cnt from patient_registration where  patient_registration_id= '150' and  office_id= '1' 
 Execution Time:0.0002901554107666

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='150' and  doctors_registration.office_id= '1' 
 Execution Time:0.0008399486541748

select count(*) as cnt from patient_registration where  patient_registration_id= '150' and  office_id= '1' 
 Execution Time:0.0002901554107666

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='150' and  doctors_registration.office_id= '1' 
 Execution Time:0.0008399486541748

select fname,lname,mrdno from patient_registration where  patient_registration_id='150' and  office_id= '1' 
 Execution Time:0.00017595291137695

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00063490867614746

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00063490867614746

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00085306167602539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035715103149414

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035715103149414

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018596649169922

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043606758117676

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00043606758117676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020503997802734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032186508178711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032186508178711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032186508178711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050592422485352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032186508178711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034213066101074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050592422485352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022480487823486

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012240409851074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032997131347656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065708160400391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016100406646729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054271221160889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054271221160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054271221160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054271221160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054271221160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054271221160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054271221160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0054271221160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033283233642578

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023388862609863

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039410591125488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016729831695557

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011510848999023

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061893463134766

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038003921508789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002899169921875

select * from office where  office_id= '1' 
 Execution Time:0.00053501129150391

select * from office where  office_id= '1' 
 Execution Time:0.00043797492980957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 
 Execution Time:0.00098299980163574


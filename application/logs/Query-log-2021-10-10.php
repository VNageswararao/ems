select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025360584259033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025360584259033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022988319396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025360584259033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022988319396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025360584259033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022988319396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030500888824463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025360584259033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022988319396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030500888824463

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002363920211792

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025360584259033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022988319396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030500888824463

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002363920211792

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025360584259033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022988319396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030500888824463

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002363920211792

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058069229125977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0025360584259033

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022988319396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018439292907715

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030500888824463

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002363920211792

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0023930072784424

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0058069229125977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031180381774902

select count(*) as cnt from patient_registration where  patient_registration_id= '988' and  office_id= '1' 
 Execution Time:0.00037789344787598

select count(*) as cnt from patient_registration where  patient_registration_id= '988' and  office_id= '1' 
 Execution Time:0.00037789344787598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='988' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014910697937012

select count(*) as cnt from patient_registration where  patient_registration_id= '988' and  office_id= '1' 
 Execution Time:0.00037789344787598

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='988' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014910697937012

select fname,lname,mrdno from patient_registration where  patient_registration_id='988' and  office_id= '1' 
 Execution Time:0.00020694732666016

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047683715820312

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047683715820312

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034618377685547

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023198127746582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029802322387695

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022220611572266

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037980079650879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0024600028991699

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046086311340332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046086311340332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025200843811035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092005729675293

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00092005729675293

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071501731872559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060796737670898

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059390068054199

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060200691223145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032730102539062

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058794021606445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058794021606445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049304962158203

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00049304962158203

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088214874267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041770935058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041770935058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041770935058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041770935058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018858909606934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041770935058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018858909606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041770935058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018858909606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041770935058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018858909606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037012100219727

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041770935058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036530494689941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0025620460510254

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018858909606934

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00094795227050781

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001572847366333

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037012100219727

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034370422363281

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048398971557617

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00048398971557617

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034189224243164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033431053161621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0033431053161621

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023069381713867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024762153625488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024762153625488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024762153625488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001107931137085

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024762153625488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001107931137085

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028841495513916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024762153625488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001107931137085

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028841495513916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024762153625488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001107931137085

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028841495513916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024762153625488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001107931137085

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028841495513916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.010374069213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0024762153625488

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0014641284942627

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001107931137085

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028841495513916

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037899017333984

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037729740142822

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.010374069213867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0077731609344482

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012810230255127

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012810230255127

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040102005004883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045013427734375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00045013427734375

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037407875061035

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.00030803680419922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014128684997559

select count(*) as cnt from patient_registration where  patient_registration_id= '1097' and  office_id= '1' 
 Execution Time:0.00030803680419922

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1097' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014128684997559

select fname,lname,mrdno from patient_registration where  patient_registration_id='1097' and  office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010280609130859

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010280609130859

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031900405883789

select count(*) as cnt from patient_registration where  patient_registration_id= '1200' and  office_id= '1' 
 Execution Time:0.00054001808166504

select count(*) as cnt from patient_registration where  patient_registration_id= '1200' and  office_id= '1' 
 Execution Time:0.00054001808166504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1200' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021841526031494

select count(*) as cnt from patient_registration where  patient_registration_id= '1200' and  office_id= '1' 
 Execution Time:0.00054001808166504

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1200' and  doctors_registration.office_id= '1' 
 Execution Time:0.0021841526031494

select fname,lname,mrdno from patient_registration where  patient_registration_id='1200' and  office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048017501831055

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048017501831055

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053882598876953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053882598876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053882598876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014951229095459

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053882598876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014951229095459

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081396102905273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002079963684082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00053882598876953

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047779083251953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014951229095459

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00081396102905273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029671192169189

select count(*) as cnt from patient_registration where  patient_registration_id= '1200' and  office_id= '1' 
 Execution Time:0.00033307075500488

select count(*) as cnt from patient_registration where  patient_registration_id= '1200' and  office_id= '1' 
 Execution Time:0.00033307075500488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1200' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013020038604736

select count(*) as cnt from patient_registration where  patient_registration_id= '1200' and  office_id= '1' 
 Execution Time:0.00033307075500488

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1200' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013020038604736

select fname,lname,mrdno from patient_registration where  patient_registration_id='1200' and  office_id= '1' 
 Execution Time:0.0012688636779785

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005040168762207

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0005040168762207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095796585083008

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095796585083008

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037693977355957

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009000301361084

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0009000301361084

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042080879211426

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040912628173828

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040912628173828

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00019288063049316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015010833740234

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015010833740234

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030088424682617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00041890144348145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046586990356445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028705596923828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018215179443359

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039887428283691

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016388893127441

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00028610229492188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055217742919922

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055217742919922

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022602081298828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002018928527832

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.002018928527832

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023722648620605

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022387504577637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020408630371094

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044107437133789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018429756164551

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00081396102905273

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00081396102905273

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00032401084899902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001133918762207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001133918762207

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0026340484619141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009617805480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009617805480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009617805480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009617805480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017569065093994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009617805480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017569065093994

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022189617156982

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009617805480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017569065093994

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022189617156982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009617805480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017569065093994

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022189617156982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011739730834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009617805480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00217604637146

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012619495391846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0017569065093994

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0022189617156982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0011739730834961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0030641555786133

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005028247833252

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0005028247833252

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027012825012207

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074911117553711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074911117553711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013880729675293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033402442932129

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001554012298584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00062203407287598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0060470104217529

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0060169696807861

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0041868686676025

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0055651664733887

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00057220458984375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00038409233093262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0041179656982422

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00073504447937012

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00073504447937012

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078105926513672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078105926513672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024294853210449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048017501831055

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028800964355469

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031089782714844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023484230041504

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049090385437012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018599033355713

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007331371307373

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0007331371307373

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0014100074768066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062704086303711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062704086303711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031280517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020003318786621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020003318786621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020003318786621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046300888061523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020003318786621

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023984909057617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024008750915527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037407875061035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017879009246826

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060105323791504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00060105323791504

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022411346435547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011589527130127

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011589527130127

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007171630859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094199180603027

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055408477783203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055289268493652

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00057792663574219

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007171630859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031490325927734

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084710121154785

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00084710121154785

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041389465332031

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060486793518066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060486793518066

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00062894821166992

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062394142150879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043487548828125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045204162597656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030112266540527

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064992904663086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002701997756958

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0015480518341064

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0011751651763916

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018551349639893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018551349639893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018551349639893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018551349639893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0018551349639893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048589706420898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026969909667969

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0020630359649658

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033960342407227

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033960342407227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033960342407227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033960342407227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033960342407227

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056695938110352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00037097930908203

select count(*) as cnt from patient_registration where  patient_registration_id= '1362' and  office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from patient_registration where  patient_registration_id= '1362' and  office_id= '1' 
 Execution Time:0.00030899047851562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1362' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014598369598389

select count(*) as cnt from patient_registration where  patient_registration_id= '1362' and  office_id= '1' 
 Execution Time:0.00030899047851562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1362' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014598369598389

select fname,lname,mrdno from patient_registration where  patient_registration_id='1362' and  office_id= '1' 
 Execution Time:0.00019502639770508

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025739669799805

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025739669799805

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047492980957031

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00083088874816895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097780227661133

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097780227661133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097780227661133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028209686279297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097780227661133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028209686279297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.003917932510376

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0097780227661133

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0026190280914307

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0028209686279297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.003917932510376

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00080204010009766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00070714950561523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079011917114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0027980804443359

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0045061111450195

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00057387351989746

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00087308883666992

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00069284439086914

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064206123352051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065207481384277

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00058794021606445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038886070251465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065016746520996

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00057315826416016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067615509033203

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00048589706420898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00043678283691406

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00032901763916016

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00075078010559082

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00060009956359863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0081629753112793

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0036771297454834

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031938552856445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.001439094543457

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00092792510986328

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067901611328125

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00059318542480469

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00048184394836426

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00060606002807617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039148330688477

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0034151077270508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.004878044128418

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0017859935760498

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0018727779388428

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00372314453125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007319450378418

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00038504600524902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00073790550231934

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00056195259094238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003809928894043

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.0003659725189209

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00078892707824707

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 39 
 Execution Time:0.00046300888061523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637


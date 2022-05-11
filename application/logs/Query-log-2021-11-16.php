select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033228397369385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033228397369385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033228397369385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048568248748779

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033228397369385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048568248748779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033228397369385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048568248748779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026688575744629

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033228397369385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048568248748779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026688575744629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033228397369385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048568248748779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026688575744629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.023565053939819

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033228397369385

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0033619403839111

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0048568248748779

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037930011749268

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0026688575744629

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.023565053939819

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048890113830566

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0018908977508545

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0018908977508545

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00075292587280273

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00097298622131348

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00097298622131348

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0010280609130859

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013260841369629

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0013260841369629

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039350986480713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030028820037842

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030028820037842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024011135101318

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030028820037842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024011135101318

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030028820037842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024011135101318

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030028820037842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024011135101318

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007171630859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075292587280273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063180923461914

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0030028820037842

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0024011135101318

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0007331371307373

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007171630859375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053939819335938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007469654083252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081181526184082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043606758117676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042915344238281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007469654083252

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047328472137451

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.000762939453125

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.000762939453125

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036287307739258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040888786315918

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00040888786315918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031280517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093221664428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093221664428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093221664428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093221664428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093221664428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093221664428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093221664428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005950927734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093221664428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00078201293945312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034880638122559

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005950927734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054609775543213

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012919902801514

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0012919902801514

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010249614715576

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010249614715576

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026378631591797

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00044393539428711

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00095200538635254

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0026378631591797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061650276184082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003695011138916

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003695011138916

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0038180351257324

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006721019744873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006721019744873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006721019744873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006721019744873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068283081054688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003619909286499

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0006721019744873

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063800811767578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068283081054688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058290958404541

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0042610168457031

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0042610168457031

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0040528774261475

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020010471343994

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061202049255371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047492980957031

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031709671020508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028109550476074

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026583671569824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020010471343994

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048182010650635

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00055193901062012

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00083589553833008

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00061511993408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005040168762207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046682357788086

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00063395500183105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00066494941711426

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038199424743652

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028798580169678

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0028798580169678

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037598609924316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001507043838501

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00075006484985352

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0013749599456787

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00090408325195312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051188468933105

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043988227844238

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00050902366638184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.001507043838501

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051651000976562

select count(*) as cnt from patient_registration where  patient_registration_id= '977' and  office_id= '1' 
 Execution Time:0.00065207481384277

select count(*) as cnt from patient_registration where  patient_registration_id= '977' and  office_id= '1' 
 Execution Time:0.00065207481384277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='977' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027248859405518

select count(*) as cnt from patient_registration where  patient_registration_id= '977' and  office_id= '1' 
 Execution Time:0.00065207481384277

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='977' and  doctors_registration.office_id= '1' 
 Execution Time:0.0027248859405518

select fname,lname,mrdno from patient_registration where  patient_registration_id='977' and  office_id= '1' 
 Execution Time:0.0040910243988037

select count(*) as cnt from patient_registration where  patient_registration_id= '889' and  office_id= '1' 
 Execution Time:0.00035405158996582

select count(*) as cnt from patient_registration where  patient_registration_id= '889' and  office_id= '1' 
 Execution Time:0.00035405158996582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='889' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035560131072998

select count(*) as cnt from patient_registration where  patient_registration_id= '889' and  office_id= '1' 
 Execution Time:0.00035405158996582

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='889' and  doctors_registration.office_id= '1' 
 Execution Time:0.0035560131072998

select fname,lname,mrdno from patient_registration where  patient_registration_id='889' and  office_id= '1' 
 Execution Time:0.00022602081298828

select count(*) as cnt from patient_registration where  patient_registration_id= '659' and  office_id= '1' 
 Execution Time:0.00065088272094727

select count(*) as cnt from patient_registration where  patient_registration_id= '659' and  office_id= '1' 
 Execution Time:0.00065088272094727

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='659' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024240016937256

select count(*) as cnt from patient_registration where  patient_registration_id= '659' and  office_id= '1' 
 Execution Time:0.00065088272094727

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='659' and  doctors_registration.office_id= '1' 
 Execution Time:0.0024240016937256

select fname,lname,mrdno from patient_registration where  patient_registration_id='659' and  office_id= '1' 
 Execution Time:0.00023698806762695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082802772521973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00082802772521973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037908554077148

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0078680515289307

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0078680515289307

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0042870044708252

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0042870044708252

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.0027589797973633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037219524383545

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037219524383545

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058579444885254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00075197219848633

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045108795166016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025820732116699

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058579444885254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005375862121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037682056427002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037682056427002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037682056427002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037868022918701

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0041711330413818

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039589405059814

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037870407104492

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038230419158936

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037682056427002

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037868022918701

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0095598697662354

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035178661346436

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035178661346436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038349628448486

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035178661346436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038349628448486

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014050006866455

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00060200691223145

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0035178661346436

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038349628448486

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014050006866455

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.016252994537354

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074291229248047

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00074291229248047

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004880428314209

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037121772766113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00094389915466309

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040388107299805

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028514862060547

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.003154993057251

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0003511905670166

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0003511905670166

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00028204917907715

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046396255493164

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046396255493164

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002129077911377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055789947509766

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055789947509766

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00050997734069824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028221607208252

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028221607208252

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005338191986084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028221607208252

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005338191986084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028221607208252

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005338191986084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028221607208252

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005338191986084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045013427734375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0028221607208252

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0005338191986084

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033688545227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00068902969360352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005897045135498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013921976089478

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013921976089478

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013921976089478

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013921976089478

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.013921976089478

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0022320747375488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044512748718262

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0029919147491455

select count(*) as cnt from patient_registration where  patient_registration_id= '2535' and  office_id= '1' 
 Execution Time:0.00070786476135254

select count(*) as cnt from patient_registration where  patient_registration_id= '2535' and  office_id= '1' 
 Execution Time:0.00070786476135254

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2535' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033080577850342

select count(*) as cnt from patient_registration where  patient_registration_id= '2535' and  office_id= '1' 
 Execution Time:0.00070786476135254

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2535' and  doctors_registration.office_id= '1' 
 Execution Time:0.0033080577850342

select fname,lname,mrdno from patient_registration where  patient_registration_id='2535' and  office_id= '1' 
 Execution Time:0.0015790462493896

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029470920562744

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0029470920562744

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00075697898864746

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.0044219493865967

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070149898529053

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070149898529053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038938522338867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070149898529053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038938522338867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034828186035156

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070149898529053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038938522338867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034828186035156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0070149898529053

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038938522338867

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0034828186035156

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037848949432373

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0013840198516846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036778450012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036778450012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036778450012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036778450012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036778450012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014941692352295

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036778450012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014941692352295

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010559558868408

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023488998413086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0036778450012207

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0018990039825439

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052404403686523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00090503692626953

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014941692352295

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010559558868408

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0068018436431885

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059008598327637

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00059008598327637

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00077295303344727

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055503845214844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00061416625976562

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00034308433532715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028610229492188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048708915710449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.010741949081421

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040388107299805

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040388107299805

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027894973754883

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035409927368164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0035409927368164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034713745117188

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053811073303223

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00053811073303223

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0010099411010742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030698776245117

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030698776245117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026359558105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030698776245117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026359558105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035820007324219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030698776245117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026359558105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035820007324219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018191337585449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030698776245117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026359558105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035820007324219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025417804718018

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030698776245117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026359558105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035820007324219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025417804718018

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022289752960205

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0030698776245117

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026359558105469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0035820007324219

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018191337585449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025417804718018

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002291202545166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053629875183105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028204917907715

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054407119750977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.001021146774292

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064682960510254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070309638977051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00076603889465332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037598609924316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00057101249694824

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00064682960510254

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047669410705566

select count(*) as cnt from patient_registration where  patient_registration_id= '528' and  office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_registration where  patient_registration_id= '528' and  office_id= '1' 
 Execution Time:0.00033903121948242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='528' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032351016998291

select count(*) as cnt from patient_registration where  patient_registration_id= '528' and  office_id= '1' 
 Execution Time:0.00033903121948242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='528' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032351016998291

select fname,lname,mrdno from patient_registration where  patient_registration_id='528' and  office_id= '1' 
 Execution Time:0.0017549991607666

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010190010070801

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010190010070801

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00071597099304199

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00071597099304199

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='15' and  doctors_registration.office_id= '1' 
 Execution Time:0.004525899887085

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00071597099304199

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='15' and  doctors_registration.office_id= '1' 
 Execution Time:0.004525899887085

select fname,lname,mrdno from patient_registration where  patient_registration_id='15' and  office_id= '1' 
 Execution Time:0.00048708915710449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055599212646484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026202201843262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041038990020752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041038990020752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041038990020752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041038990020752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041038990020752

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045680999755859

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.00066399574279785

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.00066399574279785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2534' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041968822479248

select count(*) as cnt from patient_registration where  patient_registration_id= '2534' and  office_id= '1' 
 Execution Time:0.00066399574279785

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2534' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041968822479248

select fname,lname,mrdno from patient_registration where  patient_registration_id='2534' and  office_id= '1' 
 Execution Time:0.018390893936157

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029730796813965

select count(*) as cnt from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0029730796813965

select * from ipdcharge where  office_id= 1 and status=1 
 Execution Time:0.0013971328735352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016360282897949

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0016360282897949

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040602684020996

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00058507919311523

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00068902969360352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0038731098175049

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00056719779968262

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003211498260498

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075316429138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00069594383239746

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00046610832214355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032281875610352

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075316429138184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066030025482178

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069189071655273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069189071655273

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038480758666992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.51890897750854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.51890897750854

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011081695556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.51890897750854

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011081695556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011210441589355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.51890897750854

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011081695556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011210441589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031077861785889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.51890897750854

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011081695556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011210441589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031077861785889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.51890897750854

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011081695556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011210441589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031077861785889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010230541229248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093889236450195

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.51890897750854

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0011081695556641

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011210441589355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0031077861785889

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033669471740723

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010230541229248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0066249370574951

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066208839416504

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066208839416504

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030183792114258

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00077104568481445

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00077104568481445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047516822814941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096797943115234

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029492378234863

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028586387634277

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036311149597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047516822814941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046191215515137

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0029590129852295

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042295455932617

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073099136352539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073099136352539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073099136352539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065016746520996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027458667755127

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00072288513183594

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00073099136352539

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034284591674805

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034499168395996

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00065016746520996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0079801082611084

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042486190795898

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026297569274902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076198577880859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0015239715576172

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00038886070251465

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00037717819213867

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032901763916016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043988227844238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0034329891204834

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067379474639893

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067379474639893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033600330352783

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067379474639893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033600330352783

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067379474639893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033600330352783

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067379474639893

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0033600330352783

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089311599731445

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074911117553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00093197822570801

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00052499771118164

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052404403686523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003821849822998

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074911117553711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050320625305176

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040240287780762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040240287780762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040240287780762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034520626068115

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040240287780762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034520626068115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037589073181152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040240287780762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034520626068115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037589073181152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040240287780762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034520626068115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037589073181152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020499229431152

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0016069412231445

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0040240287780762

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00081682205200195

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0034520626068115

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037589073181152

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018839836120605

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0020499229431152

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061631202697754

select count(*) as cnt from patient_registration where  patient_registration_id= '1841' and  office_id= '1' 
 Execution Time:0.0030281543731689

select count(*) as cnt from patient_registration where  patient_registration_id= '1841' and  office_id= '1' 
 Execution Time:0.0030281543731689

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1841' and  doctors_registration.office_id= '1' 
 Execution Time:0.023745059967041

select count(*) as cnt from patient_registration where  patient_registration_id= '1841' and  office_id= '1' 
 Execution Time:0.0030281543731689

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1841' and  doctors_registration.office_id= '1' 
 Execution Time:0.023745059967041

select fname,lname,mrdno from patient_registration where  patient_registration_id='1841' and  office_id= '1' 
 Execution Time:0.0022978782653809

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043940544128418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043940544128418

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0040218830108643

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0026679039001465

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0026679039001465

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0032851696014404

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062990188598633

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062990188598633

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036191940307617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036191940307617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036191940307617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036191940307617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00048422813415527

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00070691108703613

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036191940307617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00047087669372559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063800811767578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039880275726318

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00071501731872559

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0002589225769043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071001052856445

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00071001052856445

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00035881996154785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0009920597076416

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062799453735352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037002563476562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036287307739258

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037503242492676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0088238716125488

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054383277893066

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00054383277893066

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00066590309143066

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094819068908691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094819068908691

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011081695556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045080184936523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045080184936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045080184936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037891864776611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045080184936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037891864776611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011110305786133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045080184936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037891864776611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011110305786133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045080184936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037891864776611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011110305786133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031938552856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045080184936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037891864776611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011110305786133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031938552856445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038468837738037

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0045080184936523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037670135498047

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037891864776611

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0011110305786133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011100769042969

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031938552856445

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038468837738037

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067918300628662

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054340362548828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054340362548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054340362548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054340362548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054340362548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00067687034606934

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.000946044921875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00033092498779297

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00033092498779297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034818649291992

select count(*) as cnt from patient_registration where  patient_registration_id= '2543' and  office_id= '1' 
 Execution Time:0.00033092498779297

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2543' and  doctors_registration.office_id= '1' 
 Execution Time:0.0034818649291992

select fname,lname,mrdno from patient_registration where  patient_registration_id='2543' and  office_id= '1' 
 Execution Time:0.00063705444335938

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015058517456055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015058517456055

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034499168395996

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00063681602478027

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.00077199935913086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049850940704346

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049850940704346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049850940704346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049850940704346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049850940704346

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00052118301391602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020313262939453

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005040168762207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059309005737305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059309005737305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059309005737305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059309005737305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059309005737305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082898139953613

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056982040405273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044488906860352

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0059309005737305

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00046610832214355

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00036096572875977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00082898139953613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050790309906006

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054340362548828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054340362548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054340362548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026819705963135

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054340362548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026819705963135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017530918121338

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054340362548828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011999607086182

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0026819705963135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0017530918121338

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0034999847412109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086522102355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010941028594971

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00066781044006348

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028491020202637

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00049805641174316

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011250972747803

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00086522102355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0043928623199463

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00051403045654297

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00051403045654297

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0003049373626709

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084185600280762

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00084185600280762

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017750263214111

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0023288726806641

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0008089542388916

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057291984558105

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00045418739318848

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00039887428283691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0017750263214111

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049300193786621

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00033092498779297

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00033092498779297

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054502487182617

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027551651000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027551651000977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027551651000977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027551651000977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027551651000977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027551651000977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027551651000977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0027551651000977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001471996307373

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029706954956055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002892017364502

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045299530029297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049378871917725

select count(*) as cnt from patient_registration where  patient_registration_id= '1205' and  office_id= '1' 
 Execution Time:0.0030879974365234

select count(*) as cnt from patient_registration where  patient_registration_id= '1205' and  office_id= '1' 
 Execution Time:0.0030879974365234

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0072181224822998

select count(*) as cnt from patient_registration where  patient_registration_id= '1205' and  office_id= '1' 
 Execution Time:0.0030879974365234

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1205' and  doctors_registration.office_id= '1' 
 Execution Time:0.0072181224822998

select fname,lname,mrdno from patient_registration where  patient_registration_id='1205' and  office_id= '1' 
 Execution Time:0.00370192527771

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007939338684082

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0007939338684082

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00093412399291992

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088000297546387

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00088000297546387

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003870964050293

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.003870964050293

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015208721160889

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015208721160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015208721160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015208721160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070285797119141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015208721160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070285797119141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015208721160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070285797119141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015208721160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070285797119141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077700614929199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0015208721160889

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00074601173400879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00093293190002441

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00070285797119141

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043487548828125

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00077700614929199

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0033819675445557

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063920021057129

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063920021057129

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00035595893859863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069785118103027

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00069785118103027

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040388107299805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003803014755249

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003803014755249

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021789073944092

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003803014755249

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021789073944092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001309871673584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003803014755249

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021789073944092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001309871673584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092887878417969

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010619163513184

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0013909339904785

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.003803014755249

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0021789073944092

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.001309871673584

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092887878417969

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054931640625

select count(*) as cnt from patient_registration where  patient_registration_id= '1064' and  office_id= '1' 
 Execution Time:0.0032739639282227

select count(*) as cnt from patient_registration where  patient_registration_id= '1064' and  office_id= '1' 
 Execution Time:0.0032739639282227

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1064' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037798881530762

select count(*) as cnt from patient_registration where  patient_registration_id= '1064' and  office_id= '1' 
 Execution Time:0.0032739639282227

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1064' and  doctors_registration.office_id= '1' 
 Execution Time:0.0037798881530762

select fname,lname,mrdno from patient_registration where  patient_registration_id='1064' and  office_id= '1' 
 Execution Time:0.0036439895629883

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033187866210938

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00033187866210938

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031208992004395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048089027404785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048089027404785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048089027404785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048089027404785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091004371643066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007779598236084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057005882263184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00048089027404785

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048208236694336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00091004371643066

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053279399871826

select count(*) as cnt from patient_registration where  patient_registration_id= '2526' and  office_id= '1' 
 Execution Time:0.00067687034606934

select count(*) as cnt from patient_registration where  patient_registration_id= '2526' and  office_id= '1' 
 Execution Time:0.00067687034606934

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2526' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050840377807617

select count(*) as cnt from patient_registration where  patient_registration_id= '2526' and  office_id= '1' 
 Execution Time:0.00067687034606934

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2526' and  doctors_registration.office_id= '1' 
 Execution Time:0.0050840377807617

select fname,lname,mrdno from patient_registration where  patient_registration_id='2526' and  office_id= '1' 
 Execution Time:0.00041079521179199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076794624328613

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076794624328613

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003509521484375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00089597702026367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031304359436035

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032496452331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00069189071655273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.007612943649292

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055503845214844

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00025296211242676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015089511871338

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0015089511871338

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0023000240325928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069212913513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069212913513184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069212913513184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069212913513184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063490867614746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0022730827331543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00069212913513184

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040698051452637

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00063490867614746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.005206823348999

select count(*) as cnt from patient_registration where  patient_registration_id= '172' and  office_id= '1' 
 Execution Time:0.00072216987609863

select count(*) as cnt from patient_registration where  patient_registration_id= '172' and  office_id= '1' 
 Execution Time:0.00072216987609863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='172' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032238960266113

select count(*) as cnt from patient_registration where  patient_registration_id= '172' and  office_id= '1' 
 Execution Time:0.00072216987609863

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='172' and  doctors_registration.office_id= '1' 
 Execution Time:0.0032238960266113

select fname,lname,mrdno from patient_registration where  patient_registration_id='172' and  office_id= '1' 
 Execution Time:0.00048112869262695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094914436340332

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00094914436340332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029492378234863

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075316429138184

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00075316429138184

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092291831970215

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00092291831970215

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030500888824463

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030500888824463

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030500888824463

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030500888824463

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032970905303955

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00082302093505859

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030500888824463

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010099411010742

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0032970905303955

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042221546173096

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.00098299980163574

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.00098299980163574

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2041' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042409896850586

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.00098299980163574

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2041' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042409896850586

select fname,lname,mrdno from patient_registration where  patient_registration_id='2041' and  office_id= '1' 
 Execution Time:0.0038180351257324

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0039730072021484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0039730072021484

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0036969184875488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049188137054443

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049188137054443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021920204162598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049188137054443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021920204162598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.07658314704895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049188137054443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021920204162598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.07658314704895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011558532714844

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0049188137054443

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0021920204162598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.07658314704895

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0011558532714844

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0024759769439697

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.00033903121948242

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.00033903121948242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2041' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038909912109375

select count(*) as cnt from patient_registration where  patient_registration_id= '2041' and  office_id= '1' 
 Execution Time:0.00033903121948242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2041' and  doctors_registration.office_id= '1' 
 Execution Time:0.0038909912109375

select fname,lname,mrdno from patient_registration where  patient_registration_id='2041' and  office_id= '1' 
 Execution Time:0.00061607360839844

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033750534057617

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0033750534057617

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00044512748718262

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.0005950927734375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058050155639648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058050155639648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058050155639648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058050155639648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0058050155639648

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063109397888184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059294700622559

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00057387351989746

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040130615234375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040130615234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040130615234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040130615234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030248165130615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040130615234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030248165130615

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040130615234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030248165130615

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040130615234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030248165130615

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093698501586914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0040130615234375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007321834564209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034511089324951

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0030248165130615

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00082516670227051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00093698501586914

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0053699016571045

select count(*) as cnt from patient_registration where  patient_registration_id= '2236' and  office_id= '1' 
 Execution Time:0.00050091743469238

select count(*) as cnt from patient_registration where  patient_registration_id= '2236' and  office_id= '1' 
 Execution Time:0.00050091743469238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2236' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041649341583252

select count(*) as cnt from patient_registration where  patient_registration_id= '2236' and  office_id= '1' 
 Execution Time:0.00050091743469238

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2236' and  doctors_registration.office_id= '1' 
 Execution Time:0.0041649341583252

select fname,lname,mrdno from patient_registration where  patient_registration_id='2236' and  office_id= '1' 
 Execution Time:0.00038599967956543

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046896934509277

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046896934509277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00034403800964355

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072660446166992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072660446166992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072660446166992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072660446166992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072660446166992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00060296058654785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00023913383483887

select count(*) as cnt from patient_registration where  patient_registration_id= '2236' and  office_id= '1' 
 Execution Time:0.00045895576477051

select count(*) as cnt from patient_registration where  patient_registration_id= '2236' and  office_id= '1' 
 Execution Time:0.00045895576477051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2236' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043160915374756

select count(*) as cnt from patient_registration where  patient_registration_id= '2236' and  office_id= '1' 
 Execution Time:0.00045895576477051

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2236' and  doctors_registration.office_id= '1' 
 Execution Time:0.0043160915374756

select fname,lname,mrdno from patient_registration where  patient_registration_id='2236' and  office_id= '1' 
 Execution Time:0.00038385391235352

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054717063903809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00054717063903809

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00034189224243164

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052719116210938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052719116210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052719116210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052719116210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052719116210938

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055718421936035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068807601928711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037193298339844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033092498779297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027084350585938

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054001808166504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0052540302276611

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003303050994873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003303050994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020549297332764

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003303050994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020549297332764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003303050994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020549297332764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012068748474121

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003303050994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020549297332764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012068748474121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003303050994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020549297332764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012068748474121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003303050994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020549297332764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012068748474121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038788318634033

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.003303050994873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0020549297332764

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0012068748474121

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00059795379638672

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038788318634033

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.018164873123169

select count(*) as cnt from patient_registration where  patient_registration_id= '1714' and  office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from patient_registration where  patient_registration_id= '1714' and  office_id= '1' 
 Execution Time:0.00044894218444824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1714' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036230087280273

select count(*) as cnt from patient_registration where  patient_registration_id= '1714' and  office_id= '1' 
 Execution Time:0.00044894218444824

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1714' and  doctors_registration.office_id= '1' 
 Execution Time:0.0036230087280273

select fname,lname,mrdno from patient_registration where  patient_registration_id='1714' and  office_id= '1' 
 Execution Time:0.00041699409484863

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040793418884277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034403800964355

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016999244689941

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0016999244689941

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0036108493804932

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037150382995605

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037150382995605

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0037829875946045

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010617017745972

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010617017745972

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010617017745972

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010617017745972

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010617017745972

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010617017745972

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010617017745972

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010617017745972

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037908554077148

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00059604644775391

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048670768737793

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030899047851562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024869441986084

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0024869441986084

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0039939880371094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011722087860107

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011722087860107

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077328681945801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011722087860107

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077328681945801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.015895843505859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011722087860107

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077328681945801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.015895843505859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004425048828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011722087860107

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077328681945801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.015895843505859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004425048828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011722087860107

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077328681945801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.015895843505859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004425048828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035560131072998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086269378662109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.011722087860107

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0077328681945801

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.015895843505859

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.004425048828125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013740062713623

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0035560131072998

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0090968608856201

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00081300735473633

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00081300735473633

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.0014400482177734

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.014242887496948

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.014242887496948

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0088529586791992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033020973205566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033020973205566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033020973205566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033020973205566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037081241607666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033409595489502

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0037980079650879

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.002310037612915

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033020973205566

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037710666656494

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037999153137207

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0037081241607666

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0061850547790527

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0011720657348633

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0011720657348633

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1646' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042479038238525

select count(*) as cnt from patient_registration where  patient_registration_id= '1646' and  office_id= '1' 
 Execution Time:0.0011720657348633

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1646' and  doctors_registration.office_id= '1' 
 Execution Time:0.0042479038238525

select fname,lname,mrdno from patient_registration where  patient_registration_id='1646' and  office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074911117553711

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00074911117553711

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0025269985198975

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0025269985198975

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.0023918151855469

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053501129150391

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010560989379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010560989379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082993507385254

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010560989379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082993507385254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010560989379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082993507385254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010560989379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082993507385254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0019431114196777

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.010560989379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00082993507385254

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00069689750671387

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007479190826416

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047709941864014

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00074601173400879

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00074601173400879

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055813789367676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00055813789367676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084400177001953

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00096392631530762

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00054597854614258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035595893859863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00055098533630371

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00084400177001953

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0047152042388916

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00050091743469238

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00050091743469238

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00033807754516602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010268688201904

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010268688201904

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052690505981445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005488395690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006101131439209

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050210952758789

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043702125549316

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042104721069336

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049614906311035

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005488395690918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032379627227783

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035040378570557

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0035040378570557

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0020360946655273

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043370723724365

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0043370723724365

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018620491027832

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036830902099609

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036830902099609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036830902099609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036830902099609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038731098175049

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036599636077881

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00089788436889648

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00154709815979

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0036830902099609

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038139820098877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0038731098175049

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0067148208618164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048685073852539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00048685073852539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043179988861084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043179988861084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037908554077148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043179988861084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043179988861084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039350986480713

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043179988861084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039350986480713

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024049282073975

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010888576507568

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0043179988861084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0037908554077148

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0039350986480713

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0024049282073975

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0051281452178955

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062019824981689

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062019824981689

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062019824981689

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062019824981689

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062019824981689

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051712989807129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select count(*) as cnt from patient_registration where  patient_registration_id= '2526' and  office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from patient_registration where  patient_registration_id= '2526' and  office_id= '1' 
 Execution Time:0.00050497055053711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2526' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040731430053711

select count(*) as cnt from patient_registration where  patient_registration_id= '2526' and  office_id= '1' 
 Execution Time:0.00050497055053711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2526' and  doctors_registration.office_id= '1' 
 Execution Time:0.0040731430053711

select fname,lname,mrdno from patient_registration where  patient_registration_id='2526' and  office_id= '1' 
 Execution Time:0.0027420520782471

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034370422363281

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0034370422363281

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0025250911712646

select * from investigation where  investigation_id=13  and office_id= 1 and status=1 
 Execution Time:0.002540111541748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032730102539062

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032730102539062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032730102539062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032730102539062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0032730102539062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028419494628906

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00062918663024902

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031685829162598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020909309387207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040006637573242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052595138549805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050230026245117

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00096988677978516

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00096988677978516

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037598609924316

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010600090026855

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010600090026855

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0045270919799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010678768157959

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010678768157959

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010678768157959

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010678768157959

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010061264038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010418891906738

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011379718780518

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010178089141846

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0010678768157959

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0008389949798584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0010061264038086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062320232391357

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086402893066406

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00086402893066406

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036191940307617

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078296661376953

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00078296661376953

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079512596130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00066399574279785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00061702728271484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00064802169799805

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040912628173828

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035381317138672

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00079512596130371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046310424804688

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00062298774719238

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00062298774719238

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00033712387084961

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067400932312012

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00067400932312012

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080299377441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0093801021575928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0093801021575928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077619552612305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0093801021575928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077619552612305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062479972839355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0093801021575928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077619552612305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062479972839355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033249855041504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0093801021575928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077619552612305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062479972839355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033249855041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0093801021575928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077619552612305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062479972839355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033249855041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019171237945557

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0093801021575928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077619552612305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062479972839355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033249855041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019171237945557

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002892017364502

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0093801021575928

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0077619552612305

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0062479972839355

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0033249855041504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.003770112991333

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0019171237945557

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002892017364502

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0086960792541504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00076103210449219

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.000823974609375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080561637878418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080561637878418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080561637878418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.014707088470459

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080561637878418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.014707088470459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0080561637878418

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00087785720825195

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.014707088470459

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00074410438537598

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0034449100494385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075411796569824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00067996978759766

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00057697296142578

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042510032653809

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038290023803711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00075411796569824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0062389373779297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020871162414551

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020871162414551

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020871162414551

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020871162414551

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087189674377441

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00070095062255859

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0031499862670898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.003809928894043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020871162414551

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00090813636779785

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00087189674377441

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0054740905761719

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071310997009277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0071310997009277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00092697143554688

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00035595893859863

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050051212310791

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050051212310791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050051212310791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050051212310791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050051212310791

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066113471984863

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032711029052734

select count(*) as cnt from patient_registration where  patient_registration_id= '2557' and  office_id= '1' 
 Execution Time:0.00086402893066406

select count(*) as cnt from patient_registration where  patient_registration_id= '2557' and  office_id= '1' 
 Execution Time:0.00086402893066406

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2557' and  doctors_registration.office_id= '1' 
 Execution Time:0.0066859722137451

select count(*) as cnt from patient_registration where  patient_registration_id= '2557' and  office_id= '1' 
 Execution Time:0.00086402893066406

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description,cancel_flag from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='2557' and  doctors_registration.office_id= '1' 
 Execution Time:0.0066859722137451

select fname,lname,mrdno from patient_registration where  patient_registration_id='2557' and  office_id= '1' 
 Execution Time:0.00049901008605957

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023438930511475

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0023438930511475

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00049281120300293

select * from investigation where  investigation_id=16  and office_id= 1 and status=1 
 Execution Time:0.00063300132751465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042438507080078

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042438507080078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042438507080078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042438507080078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042438507080078

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00076794624328613

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031113624572754

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059008598327637

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0010750293731689

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00044703483581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047898292541504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00052809715270996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058794021606445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0031070709228516

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023319721221924

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0039288997650146

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0023319721221924

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00052499771118164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031590461730957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00045394897460938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0011360645294189

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026679039001465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00062990188598633

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00033187866210938

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00041699409484863

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00083208084106445

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0003511905670166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0047280788421631

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0047280788421631

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0047280788421631

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0010950565338135

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00033283233642578

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018501281738281

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058603286743164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046014785766602

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038313865661621

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00041413307189941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058102607727051

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00039505958557129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00033020973205566

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00038480758666992

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0012810230255127

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00050997734069824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043892860412598

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00029683113098145

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031208992004395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072097778320312

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00080704689025879

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00058984756469727

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044107437133789

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00043296813964844

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035405158996582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0024909973144531

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0002899169921875

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016117095947266

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00042891502380371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00020599365234375

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00028777122497559

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018405914306641

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0014140605926514

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043702125549316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022411346435547

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00051093101501465

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00064778327941895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0004432201385498

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003819465637207

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00071001052856445

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00057411193847656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028491020202637

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00064492225646973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028014183044434

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00066280364990234

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051689147949219

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038468837738037

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038468837738037

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0038468837738037

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0036590099334717

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0037209987640381

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0034291744232178

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038948059082031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041413307189941

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00039196014404297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029706954956055

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00037002563476562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00078797340393066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00048184394836426

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00051403045654297

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005791187286377

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00040292739868164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002439022064209

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00049519538879395

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00028300285339355

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00036501884460449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005028247833252

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00043916702270508

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0031490325927734

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00056290626525879

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00046992301940918

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0003209114074707

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0013620853424072

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0010039806365967

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00054502487182617

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00094509124755859

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00033712387084961

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00035405158996582

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031349658966064

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031349658966064

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0033359527587891

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063300132751465

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0031349658966064

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0033359527587891

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00046896934509277

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049114227294922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00034689903259277

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00027608871459961

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00039196014404297

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00078582763671875

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00066900253295898

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00065016746520996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034403800964355

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029141902923584

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029141902923584

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0036630630493164

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0029141902923584

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0017969608306885

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0038540363311768

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0012111663818359

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0007171630859375

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00045919418334961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00063204765319824

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00057506561279297

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00060701370239258

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034308433532715

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011501312255859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0061540603637695

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011501312255859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0061540603637695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0054678916931152

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0011501312255859

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0061540603637695

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0054678916931152

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00051021575927734

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0043561458587646

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0043561458587646

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036580562591553

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00065803527832031

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0043561458587646

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036580562591553

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0009610652923584

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0032060146331787

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00067400932312012

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00077080726623535

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0006401538848877

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.001154899597168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00072193145751953

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00055909156799316

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00060391426086426

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00051999092102051

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036406517028809

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00078082084655762

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00053715705871582

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00084304809570312

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00095105171203613

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='4' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00097489356994629

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021090507507324

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038771629333496

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021090507507324

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038771629333496

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036129951477051

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0021090507507324

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038771629333496

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0036129951477051

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0031750202178955

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0090980529785156

select medicine.name as drugname,medicine_instruction.name as instruction,days from  medicine inner join medicine_instruction on medicine.medicine_instruction_id=medicine_instruction.medicine_instruction_id where medicine_id='5' and  medicine.office_id= '1' and medicine.status=1 
 Execution Time:0.00095105171203613

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0003659725189209

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072693824768066

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00045084953308105

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00066494941711426

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026040077209473

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026040077209473

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0028359889984131

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0026040077209473

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0038599967956543

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.0028359889984131

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.0013508796691895

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0011680126190186

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00086498260498047

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072503089904785

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00063300132751465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0005948543548584

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00035285949707031

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00037813186645508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0035247802734375

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0035247802734375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.0035247802734375

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00075793266296387

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00047898292541504

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00089693069458008

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00072789192199707

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00030088424682617

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00054812431335449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0013279914855957

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00059413909912109

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00031399726867676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00044798851013184

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00055289268493652

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040388107299805

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.00069499015808105

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00051593780517578

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00044608116149902

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00053787231445312

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039315223693848

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

select name,eye_complaints_id,if(status=1,'Active','Deactive') as status from eye_complaints where  office_id= '1' and status=1 
 Execution Time:0.0010230541229248

select dialysis_id,name from dialysis where  office_id= '1' and status=1 
 Execution Time:0.00048995018005371

select medicine_id,name from  medicine where  office_id= '1' and status=1 
 Execution Time:0.00046777725219727

SELECT *
FROM `patient_registration`
WHERE `patient_registration_id` = 47 
 Execution Time:0.00037097930908203

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034999847412109


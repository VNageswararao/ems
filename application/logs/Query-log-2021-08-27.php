select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010369062423706

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010369062423706

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010369062423706

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0095729827880859

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010369062423706

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0095729827880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026328563690186

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010369062423706

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0095729827880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026328563690186

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025410652160645

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010369062423706

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0095729827880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026328563690186

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025410652160645

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010369062423706

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0095729827880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026328563690186

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025410652160645

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046029090881348

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.010369062423706

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.003835916519165

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0095729827880859

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0026328563690186

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0025410652160645

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00062680244445801

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0046029090881348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0006251335144043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043830871582031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043830871582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043830871582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043830871582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043830871582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036811828613281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043830871582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036811828613281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043830871582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036811828613281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0043830871582031

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059103965759277

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00066709518432617

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00036811828613281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078589916229248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078589916229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078589916229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078589916229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078589916229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078589916229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078589916229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0078589916229248

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00073003768920898

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031614303588867

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028896331787109

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048494338989258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060081481933594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069403648376465

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056195259094238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0004270076751709

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039887428283691

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060081481933594

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00025200843811035


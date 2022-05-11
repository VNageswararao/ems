select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021529197692871

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021529197692871

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021529197692871

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018119812011719

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021529197692871

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018119812011719

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021529197692871

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018119812011719

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021529197692871

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018119812011719

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002418041229248

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028529167175293

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0021529197692871

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0021779537200928

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018119812011719

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0017058849334717

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.002418041229248

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013360977172852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046896934509277

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021100044250488

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019598007202148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038504600524902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088596343994141

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00039911270141602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002589225769043

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057601928710938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00050902366638184

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018310546875

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038790702819824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038790702819824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026798248291016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057411193847656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063610076904297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00059604644775391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00030684471130371

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030994415283203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00057411193847656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011279582977295

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0004270076751709

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022411346435547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005180835723877

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0005180835723877

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004730224609375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039911270141602

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027990341186523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00028705596923828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00092101097106934

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00044393539428711

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035214424133301

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027012825012207

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00022101402282715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024509429931641

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022697448730469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004429817199707

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00089907646179199

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00090503692626953

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00090503692626953

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042009353637695

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072598457336426

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00072598457336426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032341480255127

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037479400634766

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032401084899902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030398368835449

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043702125549316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001107931137085

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013878345489502

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0013878345489502

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00040316581726074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062894821166992

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062894821166992

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0025019645690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039100646972656

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035810470581055

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024914741516113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042510032653809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010480880737305

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054383277893066

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041604042053223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021910667419434

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021600723266602

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022006034851074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00035309791564941

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095987319946289

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060606002807617

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060606002807617

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052499771118164

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037312507629395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053310394287109

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00040411949157715

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029110908508301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027799606323242

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037312507629395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010700225830078

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039770603179932

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039770603179932

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038528442382812

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039770603179932

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038528442382812

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.057685136795044

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039770603179932

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038528442382812

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.057685136795044

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039770603179932

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0038528442382812

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.057685136795044

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0037350654602051

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.038002967834473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047898292541504

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032591819763184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028896331787109

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026893615722656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021100044250488

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00047898292541504

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011069774627686

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00064992904663086

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00064992904663086

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013220310211182

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00064992904663086

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013220310211182

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.00032997131347656

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052189826965332

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052189826965332

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00020599365234375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013039112091064

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013039112091064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013039112091064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013039112091064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013039112091064

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00085091590881348

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035905838012695

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00036501884460449

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00036501884460449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010170936584473

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00036501884460449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0010170936584473

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.00024294853210449

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022070407867432

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0022070407867432

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00029087066650391

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00040292739868164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050139427185059

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050139427185059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014731884002686

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050139427185059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014731884002686

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050139427185059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014731884002686

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0050139427185059

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0014731884002686

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00058412551879883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0022649765014648

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035190582275391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005650520324707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00056099891662598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030803680419922

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048279762268066

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025486946105957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006101131439209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012049674987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00090599060058594

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00025606155395508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00040197372436523

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040197372436523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046992301940918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044894218444824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054693222045898

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003509521484375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030207633972168

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00044894218444824

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00096011161804199

select count(*) as cnt from patient_registration where  patient_registration_id= '295' and  office_id= '1' 
 Execution Time:0.00048589706420898

select count(*) as cnt from patient_registration where  patient_registration_id= '295' and  office_id= '1' 
 Execution Time:0.00048589706420898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='295' and  doctors_registration.office_id= '1' 
 Execution Time:0.00082683563232422

select count(*) as cnt from patient_registration where  patient_registration_id= '295' and  office_id= '1' 
 Execution Time:0.00048589706420898

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='295' and  doctors_registration.office_id= '1' 
 Execution Time:0.00082683563232422

select fname,lname,mrdno from patient_registration where  patient_registration_id='295' and  office_id= '1' 
 Execution Time:0.00017786026000977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043916702270508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049495697021484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037598609924316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029611587524414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017213821411133

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025796890258789

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017809867858887

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043916702270508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088000297546387

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00049400329589844

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0001990795135498

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011730194091797

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038695335388184

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024080276489258

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00025677680969238

select count(*) as cnt from patient_registration where  patient_registration_id= '564' and  office_id= '1' 
 Execution Time:0.00042200088500977

select count(*) as cnt from patient_registration where  patient_registration_id= '564' and  office_id= '1' 
 Execution Time:0.00042200088500977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='564' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012879371643066

select count(*) as cnt from patient_registration where  patient_registration_id= '564' and  office_id= '1' 
 Execution Time:0.00042200088500977

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='564' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012879371643066

select fname,lname,mrdno from patient_registration where  patient_registration_id='564' and  office_id= '1' 
 Execution Time:0.00025701522827148

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00042510032653809

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00058388710021973

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.00060606002807617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015568733215332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015568733215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015568733215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015568733215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015568733215332

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00040102005004883

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020003318786621

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00098800659179688

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00017189979553223

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00026988983154297

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00066804885864258

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00066804885864258

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.0018889904022217

select count(*) as cnt from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00049686431884766

select count(*) as cnt from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00049686431884766

select * from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00026321411132812

select count(*) as cnt from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00049686431884766

select * from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00026321411132812

select * from billing_detail where  billing_master_id= '87' 
 Execution Time:0.00027608871459961

select count(*) as cnt from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00049686431884766

select * from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00026321411132812

select * from billing_detail where  billing_master_id= '87' 
 Execution Time:0.00027608871459961

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00015997886657715

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00035715103149414

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00035715103149414

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014750957489014

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00035715103149414

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014750957489014

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.00094103813171387

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010471343994141

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010471343994141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010471343994141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010471343994141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010471343994141

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00048089027404785

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002741813659668

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020503997802734

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028800964355469

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00051999092102051

select count(*) as cnt from patient_registration where  office_id= '1' 
 Execution Time:0.00051999092102051

select patient_registration_id,mrdno from  patient_registration where  office_id= 1 and status=1 
 Execution Time:0.00082802772521973

select count(*) as cnt from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00051784515380859

select count(*) as cnt from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00051784515380859

select * from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00027203559875488

select count(*) as cnt from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00051784515380859

select * from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00027203559875488

select * from billing_detail where  billing_master_id= '87' 
 Execution Time:0.00034689903259277

select count(*) as cnt from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00051784515380859

select * from billing_master where  billing_master_id= '87' and  office_id= '1' 
 Execution Time:0.00027203559875488

select * from billing_detail where  billing_master_id= '87' 
 Execution Time:0.00034689903259277

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00019192695617676

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00040006637573242

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00040006637573242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.00083804130554199

select count(*) as cnt from patient_registration where  patient_registration_id= '451' and  office_id= '1' 
 Execution Time:0.00040006637573242

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='451' and  doctors_registration.office_id= '1' 
 Execution Time:0.00083804130554199

select fname,lname,mrdno from patient_registration where  patient_registration_id='451' and  office_id= '1' 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001380443572998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001380443572998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001380443572998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001380443572998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00052595138549805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00030207633972168

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001380443572998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001518726348877

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039100646972656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00083303451538086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012290477752686

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012290477752686

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012290477752686

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012290477752686

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012290477752686

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00049996376037598

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024199485778809

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00027108192443848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012779235839844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012779235839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012779235839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012779235839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043487548828125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031709671020508

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020194053649902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00012779235839844

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016689300537109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00043487548828125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084805488586426

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00054693222045898

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00054693222045898

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00024700164794922

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003511905670166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002601146697998

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024604797363281

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019001960754395

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0003511905670166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009918212890625

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00045299530029297

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00028610229492188

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00053095817565918

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040197372436523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00051212310791016

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003969669342041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002901554107666

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00024104118347168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014781951904297

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00040197372436523

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00079011917114258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001007080078125

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002129077911377

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00015807151794434

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054311752319336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071597099304199

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047397613525391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029492378234863

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033211708068848

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054311752319336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013139247894287

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015690326690674

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045490264892578

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024819374084473

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00040888786315918

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010991096496582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010991096496582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00018215179443359

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00025510787963867

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00019288063049316

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00012683868408203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014090538024902

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00011897087097168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00010991096496582

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00018215179443359

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0007941722869873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039386749267578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045418739318848

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00029087066650391

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0001678466796875

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0001981258392334

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022983551025391

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001680850982666

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039386749267578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013179779052734

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059914588928223

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00059914588928223

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003669261932373

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032496452331543

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026211738586426

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026211738586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026211738586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026211738586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026211738586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00037407875061035

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00017905235290527

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0026211738586426

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024199485778809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00022602081298828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021815299987793

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00037693977355957

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099611282348633

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00045585632324219

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00045585632324219

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00028514862060547

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012221336364746

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012221336364746

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0018999576568604

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052809715270996

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00052809715270996

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00037002563476562

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056695938110352

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056695938110352

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030612945556641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052905082702637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054097175598145

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037789344787598

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0012171268463135

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029301643371582

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025701522827148

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052905082702637

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042111873626709

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051689147949219

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00051689147949219

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00029397010803223

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052285194396973

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039489269256592

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039489269256592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010018348693848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039489269256592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010018348693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079019069671631

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039489269256592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010018348693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079019069671631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039489269256592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010018348693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079019069671631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039489269256592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010018348693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079019069671631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051212310791016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033190250396729

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039489269256592

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0010018348693848

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0079019069671631

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051212310791016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001370906829834

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00056600570678711

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00056600570678711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='13' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012779235839844

select count(*) as cnt from patient_registration where  patient_registration_id= '13' and  office_id= '1' 
 Execution Time:0.00056600570678711

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='13' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012779235839844

select fname,lname,mrdno from patient_registration where  patient_registration_id='13' and  office_id= '1' 
 Execution Time:0.00022196769714355

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059986114501953

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00059986114501953

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029301643371582

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006868839263916

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0006868839263916

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029897689819336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051212310791016

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00051212310791016

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014019012451172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014019012451172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042986869812012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004580020904541

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047993659973145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028109550476074

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00014019012451172

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00042986869812012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00082588195800781

select count(*) as cnt from patient_registration where  patient_registration_id= '295' and  office_id= '1' 
 Execution Time:0.00061416625976562

select count(*) as cnt from patient_registration where  patient_registration_id= '295' and  office_id= '1' 
 Execution Time:0.00061416625976562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='295' and  doctors_registration.office_id= '1' 
 Execution Time:0.001011848449707

select count(*) as cnt from patient_registration where  patient_registration_id= '295' and  office_id= '1' 
 Execution Time:0.00061416625976562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='295' and  doctors_registration.office_id= '1' 
 Execution Time:0.001011848449707

select fname,lname,mrdno from patient_registration where  patient_registration_id='295' and  office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047016143798828

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00047016143798828

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00022506713867188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010440349578857

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034809112548828

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00050806999206543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00032210350036621

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053501129150391

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00042200088500977

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00040078163146973

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031113624572754

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033807754516602

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023794174194336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061798095703125

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001460075378418

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00036716461181641

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00036716461181641

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='15' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011610984802246

select count(*) as cnt from patient_registration where  patient_registration_id= '15' and  office_id= '1' 
 Execution Time:0.00036716461181641

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='15' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011610984802246

select fname,lname,mrdno from patient_registration where  patient_registration_id='15' and  office_id= '1' 
 Execution Time:0.00027179718017578

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003969669342041

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0003969669342041

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from patient_registration where  patient_registration_id= '216' and  office_id= '1' 
 Execution Time:0.0006401538848877

select count(*) as cnt from patient_registration where  patient_registration_id= '216' and  office_id= '1' 
 Execution Time:0.0006401538848877

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='216' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013158321380615

select count(*) as cnt from patient_registration where  patient_registration_id= '216' and  office_id= '1' 
 Execution Time:0.0006401538848877

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='216' and  doctors_registration.office_id= '1' 
 Execution Time:0.0013158321380615

select fname,lname,mrdno from patient_registration where  patient_registration_id='216' and  office_id= '1' 
 Execution Time:0.0002589225769043

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046515464782715

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00046515464782715

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00032711029052734

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034213066101074

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034213066101074

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00031185150146484

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048184394836426

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00048184394836426

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00030398368835449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00081396102905273

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00052285194396973

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00043416023254395

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003819465637207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032377243041992

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053191184997559

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013480186462402

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003960132598877

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003960132598877

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00034213066101074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044894218444824

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003209114074707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022327899932861

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022327899932861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027940273284912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022327899932861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027940273284912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022327899932861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027940273284912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028481483459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022327899932861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027940273284912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028481483459473

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018081665039062

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022327899932861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027940273284912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028481483459473

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018081665039062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022327899932861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027940273284912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028481483459473

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018081665039062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0022327899932861

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0027940273284912

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00073099136352539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028481483459473

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0018081665039062

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074601173400879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0042178630828857

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001910924911499

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001784086227417

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00053811073303223

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.001910924911499

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-20' and  '2021-09-20' and  billing_master.office_id= 1        
 Execution Time:0.00085091590881348

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-20' and  '2021-09-20' and  billing_master.office_id= 1        
 Execution Time:0.00085091590881348

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-09-20' and '2021-09-20' and  patient_registration.office_id= 1      
 Execution Time:0.000946044921875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026392936706543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00015711784362793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014305114746094

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00018811225891113

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016498565673828

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00026082992553711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00085592269897461

select count(*) as cnt from patient_registration where  patient_registration_id= '297' and  office_id= '1' 
 Execution Time:0.00051093101501465

select count(*) as cnt from patient_registration where  patient_registration_id= '297' and  office_id= '1' 
 Execution Time:0.00051093101501465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='297' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011649131774902

select count(*) as cnt from patient_registration where  patient_registration_id= '297' and  office_id= '1' 
 Execution Time:0.00051093101501465

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='297' and  doctors_registration.office_id= '1' 
 Execution Time:0.0011649131774902

select fname,lname,mrdno from patient_registration where  patient_registration_id='297' and  office_id= '1' 
 Execution Time:0.00030612945556641

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029110908508301

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00029110908508301

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00019693374633789

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040602684020996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040602684020996

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028896331787109

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004270076751709

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0004270076751709

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047492980957031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047492980957031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047492980957031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047492980957031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007331371307373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00078821182250977

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072407722473145

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055503845214844

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00047492980957031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00044012069702148

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007331371307373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014598369598389

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010499954223633

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00077509880065918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040292739868164

select count(*) as cnt from patient_registration where  patient_registration_id= '571' and  office_id= '1' 
 Execution Time:0.00050902366638184

select count(*) as cnt from patient_registration where  patient_registration_id= '571' and  office_id= '1' 
 Execution Time:0.00050902366638184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='571' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012941360473633

select count(*) as cnt from patient_registration where  patient_registration_id= '571' and  office_id= '1' 
 Execution Time:0.00050902366638184

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='571' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012941360473633

select fname,lname,mrdno from patient_registration where  patient_registration_id='571' and  office_id= '1' 
 Execution Time:0.00023198127746582

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014829635620117

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0014829635620117

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00037789344787598

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.0006859302520752

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072238445281982

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072238445281982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072238445281982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072238445281982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0072238445281982

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00052785873413086

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00023508071899414

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00059318542480469

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00026607513427734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027799606323242

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021505355834961

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016593933105469

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00032186508178711

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00086402893066406

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015718936920166

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00037980079650879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00029397010803223

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-20' and  '2021-09-20' and  billing_master.office_id= 1        
 Execution Time:0.00082492828369141

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-20' and  '2021-09-20' and  billing_master.office_id= 1        
 Execution Time:0.00082492828369141

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-09-20' and '2021-09-20' and  patient_registration.office_id= 1      
 Execution Time:0.0013511180877686

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015730857849121

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00041484832763672

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00020694732666016

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006871223449707

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051116943359375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00035691261291504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031018257141113

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026917457580566

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00051403045654297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014760494232178

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031518936157227

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031518936157227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031518936157227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031518936157227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052285194396973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00068211555480957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047206878662109

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008399486541748

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00031518936157227

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022196769714355

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00052285194396973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011229515075684

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042414665222168

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00042414665222168

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00024080276489258

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063920021057129

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00063920021057129

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039410591125488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069808959960938

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038409233093262

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021195411682129

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00020694732666016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030899047851562

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016283988952637

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00039410591125488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088214874267578

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063395500183105

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00063395500183105

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00033783912658691

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054812431335449

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054812431335449

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0013291835784912

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037693977355957

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00023007392883301

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00021791458129883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019097328186035

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0001828670501709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00029397010803223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.010660886764526

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.010660886764526

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029587745666504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0030319690704346

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0030319690704346

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017390251159668

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058817863464355

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00044989585876465

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035285949707031

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029206275939941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030803680419922

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014410018920898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010859966278076

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00030279159545898

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00016188621520996

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00019717216491699

select count(*) as cnt from patient_registration where  patient_registration_id= '573' and  office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from patient_registration where  patient_registration_id= '573' and  office_id= '1' 
 Execution Time:0.00030398368835449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='573' and  doctors_registration.office_id= '1' 
 Execution Time:0.0007789134979248

select count(*) as cnt from patient_registration where  patient_registration_id= '573' and  office_id= '1' 
 Execution Time:0.00030398368835449

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='573' and  doctors_registration.office_id= '1' 
 Execution Time:0.0007789134979248

select fname,lname,mrdno from patient_registration where  patient_registration_id='573' and  office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015740394592285

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0015740394592285

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.0005500316619873

select * from investigation where  investigation_id=17  and office_id= 1 and status=1 
 Execution Time:0.00044608116149902

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010199546813965

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00024294853210449

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00014019012451172

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017380714416504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017380714416504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017380714416504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017380714416504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031495094299316

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0003058910369873

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00023102760314941

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00014305114746094

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00017380714416504

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017118453979492

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00031495094299316

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00087904930114746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004021167755127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004021167755127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004021167755127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.004021167755127

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0002288818359375

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0002140998840332

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-20' and  '2021-09-20' and  billing_master.office_id= 1        
 Execution Time:0.0010340213775635

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-20' and  '2021-09-20' and  billing_master.office_id= 1        
 Execution Time:0.0010340213775635

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-09-20' and '2021-09-20' and  patient_registration.office_id= 1      
 Execution Time:0.0016129016876221

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001399040222168

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00045895576477051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00029301643371582

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00021696090698242

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00036191940307617

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.001694917678833

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046491622924805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028321743011475

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028321743011475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039467811584473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028321743011475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039467811584473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037941932678223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028321743011475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039467811584473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037941932678223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038650035858154

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028321743011475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039467811584473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037941932678223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038650035858154

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029470920562744

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028321743011475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039467811584473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037941932678223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038650035858154

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029470920562744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028321743011475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039467811584473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037941932678223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038650035858154

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029470920562744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0081720352172852

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0028321743011475

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0039467811584473

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0037941932678223

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038650035858154

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0029470920562744

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00031900405883789

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0081720352172852

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041871070861816

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046706199645996

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046706199645996

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00029993057250977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038981437683105

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038981437683105

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014185905456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014185905456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014185905456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015020370483398

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014185905456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015020370483398

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004119873046875

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004880428314209

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00020289421081543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00014185905456543

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00021791458129883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00015020370483398

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00036215782165527

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0009160041809082

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00047993659973145

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00019693374633789

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038504600524902

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00030779838562012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056195259094238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00077199935913086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050687789916992

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031614303588867

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030517578125

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033783912658691

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0003049373626709

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056195259094238

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015189647674561

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058102607727051

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00058102607727051

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00041985511779785

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052595138549805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00052595138549805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032687187194824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038385391235352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00054192543029785

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0004420280456543

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00026416778564453

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027012825012207

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00023603439331055

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038385391235352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011460781097412

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059103965759277

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059103965759277

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060915946960449

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00060915946960449

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041604042053223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00043201446533203

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003960132598877

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00032401084899902

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00026702880859375

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018310546875

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00041604042053223

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00088691711425781

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012180805206299

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00039291381835938

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00043511390686035

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038504600524902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035028457641602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035028457641602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035028457641602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094528198242188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035028457641602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094528198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018041133880615

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035028457641602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094528198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018041133880615

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067911148071289

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035028457641602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094528198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018041133880615

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067911148071289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0097568035125732

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035028457641602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094528198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018041133880615

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067911148071289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0097568035125732

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047869682312012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0035028457641602

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00077104568481445

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0094528198242188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018041133880615

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0067911148071289

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0097568035125732

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0047869682312012

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0039420127868652

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055503845214844

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00055503845214844

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00023603439331055

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080490112304688

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00080490112304688

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065898895263672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065898895263672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065898895263672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065898895263672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099515914916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0005640983581543

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0006558895111084

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00065898895263672

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040912628173828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00099515914916992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00124192237854

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011591911315918

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0005030632019043

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00025010108947754

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00043916702270508

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00043916702270508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012099742889404

select count(*) as cnt from patient_registration where  patient_registration_id= '1' and  office_id= '1' 
 Execution Time:0.00043916702270508

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='1' and  doctors_registration.office_id= '1' 
 Execution Time:0.0012099742889404

select fname,lname,mrdno from patient_registration where  patient_registration_id='1' and  office_id= '1' 
 Execution Time:0.0002741813659668

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select count(*) as cnt from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00035595893859863

select * from opdcharge where  office_id= 1 and status=1 
 Execution Time:0.00022101402282715

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073003768920898

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00073003768920898

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00033211708068848

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062649250030518

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062649250030518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010337114334106

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062649250030518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010337114334106

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062649250030518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010337114334106

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062649250030518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010337114334106

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062649250030518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010337114334106

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062649250030518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010337114334106

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067591667175293

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0062649250030518

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.010337114334106

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.001676082611084

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051498413085938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00046706199645996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00067591667175293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017678737640381

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039291381835938

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00335693359375

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011451244354248

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0011451244354248

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0017259120941162

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051403045654297

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00033998489379883

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050902366638184

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013608932495117

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046205520629883

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00046205520629883

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00024890899658203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060415267944336

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00060415267944336

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029802322387695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050616264343262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00058889389038086

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027990341186523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002448558807373

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050616264343262

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014450550079346

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052881240844727

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00052881240844727

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050497055053711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050497055053711

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028395652770996

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00046420097351074

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00046420097351074

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00022697448730469

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030803680419922

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00030803680419922

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00022006034851074

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00058913230895996

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00058913230895996

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00024890899658203

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086283683776855

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00086283683776855

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00038814544677734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055980682373047

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055980682373047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055980682373047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055980682373047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007178783416748

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055193901062012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068092346191406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00054407119750977

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00055980682373047

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00050711631774902

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00035500526428223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0007178783416748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016269683837891

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048208236694336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045084953308105

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003361701965332

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00029993057250977

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020384788513184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00048208236694336

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014400482177734

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043821334838867

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00043821334838867

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00037193298339844

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00058698654174805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00033903121948242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061893463134766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00038790702819824

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029516220092773

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00050210952758789

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0011448860168457

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00034713745117188

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061893463134766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015220642089844

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049686431884766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00031805038452148

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021219253540039

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023508071899414

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002138614654541

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00049686431884766

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00084495544433594

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039911270141602

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00039911270141602

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00017404556274414

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058698654174805

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00058698654174805

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00046110153198242

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00037288665771484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034022331237793

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003960132598877

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032186508178711

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023293495178223

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00053000450134277

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0016989707946777

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040507316589355

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00040507316589355

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00028800964355469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045490264892578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006718635559082

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058293342590332

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036215782165527

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00030303001403809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00026488304138184

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045490264892578

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012390613555908

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000701904296875

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00076913833618164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00050497055053711

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042605400085449

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037980079650879

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040221214294434

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.000701904296875

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015571117401123

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065898895263672

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036907196044922

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050711631774902

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00050711631774902

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0002748966217041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061511993408203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00056004524230957

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060081481933594

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00042581558227539

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00042510032653809

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003349781036377

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00028204917907715

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00061511993408203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014710426330566

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057005882263184

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00057005882263184

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036249160766602

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0036249160766602

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012080669403076

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002810001373291

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002810001373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002810001373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002810001373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002810001373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002810001373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002810001373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092792510986328

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002810001373291

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00047588348388672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034093856811523

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00051307678222656

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00034379959106445

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0034220218658447

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00092792510986328

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0048820972442627

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00063896179199219

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00043392181396484

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00055694580078125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00033187866210938

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00042486190795898

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00019502639770508

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046706199645996

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0008540153503418

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00056290626525879

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021505355834961

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005190372467041

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0005190372467041

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00017094612121582

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014488697052002

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046205520629883

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0003349781036377

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00030708312988281

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00043082237243652

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0014488697052002

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0041341781616211

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00071406364440918

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00041580200195312

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024795532226562

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00024509429931641

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036811828613281

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00058293342590332

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013148784637451

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032186508178711

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00032186508178711

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00016498565673828

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054788589477539

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054788589477539

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00029587745666504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046181678771973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0020401477813721

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003359317779541

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00018095970153809

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00019502639770508

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00026202201843262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00016903877258301

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00046181678771973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010349750518799

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00048494338989258

select count(*) as cnt from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.00048494338989258

select gender from patient_title where  patient_title_id = '5' and office_id= '1' 
 Execution Time:0.0003349781036377

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062298774719238

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00062298774719238

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00027298927307129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0010690689086914

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048494338989258

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00031399726867676

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00029397010803223

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0002291202545166

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0005190372467041

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014050006866455

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026679039001465

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00026679039001465

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00018501281738281

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047898292541504

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047898292541504

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00042200088500977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059440135955811

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059440135955811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059440135955811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028018951416016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059440135955811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028018951416016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059440135955811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028018951416016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047640800476074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059440135955811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028018951416016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047640800476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021400451660156

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.002485990524292

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0059440135955811

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0027229785919189

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0028018951416016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.002791166305542

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0047640800476074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0021400451660156

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0046539306640625

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056314468383789

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00056314468383789

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059008598327637

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00059008598327637

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026202201843262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049710273742676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049710273742676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049710273742676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049710273742676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050687789916992

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00045609474182129

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00072002410888672

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00041794776916504

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00049710273742676

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00038599967956543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00041294097900391

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050687789916992

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00097799301147461

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034999847412109

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00034999847412109

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00027799606323242

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044417381286621

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00044417381286621

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034117698669434

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006101131439209

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00059080123901367

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00046396255493164

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00034785270690918

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032901763916016

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00033402442932129

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006101131439209

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014441013336182

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00091409683227539

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00091409683227539

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00021004676818848

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054097175598145

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00054097175598145

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00034880638122559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00092506408691406

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00051999092102051

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00036001205444336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032305717468262

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022792816162109

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0004889965057373

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0013329982757568

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00034189224243164

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00028395652770996

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00021600723266602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00023794174194336

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00020217895507812

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022482872009277

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00038599967956543

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011069774627686

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071382522583008

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00071382522583008

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00026202201843262

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036787986755371

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00036787986755371

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031399726867676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050115585327148

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00053191184997559

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00058698654174805

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00039005279541016

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00037097930908203

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00040602684020996

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00022315979003906

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00050115585327148

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0014908313751221

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070595741271973

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00069904327392578

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00081706047058105

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00045514106750488

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00043988227844238

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00048398971557617

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00020790100097656

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00070595741271973

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012609958648682

select count(*) as cnt from patient_registration where  patient_registration_id= '503' and  office_id= '1' 
 Execution Time:0.00059413909912109

select count(*) as cnt from patient_registration where  patient_registration_id= '503' and  office_id= '1' 
 Execution Time:0.00059413909912109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='503' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014619827270508

select count(*) as cnt from patient_registration where  patient_registration_id= '503' and  office_id= '1' 
 Execution Time:0.00059413909912109

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='503' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014619827270508

select fname,lname,mrdno from patient_registration where  patient_registration_id='503' and  office_id= '1' 
 Execution Time:0.00024509429931641

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036096572875977

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00036096572875977

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00018119812011719

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068807601928711

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068807601928711

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00039505958557129

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00032782554626465

select count(*) as cnt from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00032782554626465

select gender from patient_title where  patient_title_id = '3' and office_id= '1' 
 Execution Time:0.00030398368835449

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00031590461730957

select count(*) as cnt from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00031590461730957

select gender from patient_title where  patient_title_id = '4' and office_id= '1' 
 Execution Time:0.00022006034851074

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047183036804199

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00047183036804199

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00026082992553711

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.000579833984375

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00048613548278809

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00032305717468262

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0002739429473877

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00036287307739258

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00054097175598145

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00095295906066895

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013828277587891

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013828277587891

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010840892791748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00033307075500488

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.0013828277587891

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028705596923828

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0009760856628418

select count(*) as cnt from patient_registration where  patient_registration_id= '594' and  office_id= '1' 
 Execution Time:0.00043106079101562

select count(*) as cnt from patient_registration where  patient_registration_id= '594' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='594' and  doctors_registration.office_id= '1' 
 Execution Time:0.00072216987609863

select count(*) as cnt from patient_registration where  patient_registration_id= '594' and  office_id= '1' 
 Execution Time:0.00043106079101562

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='594' and  doctors_registration.office_id= '1' 
 Execution Time:0.00072216987609863

select fname,lname,mrdno from patient_registration where  patient_registration_id='594' and  office_id= '1' 
 Execution Time:0.00020599365234375

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017499923706055

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0017499923706055

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00035691261291504

select * from investigation where  investigation_id=15  and office_id= 1 and status=1 
 Execution Time:0.00067591667175293

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028276443481445

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.00099086761474609

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027704238891602

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00028276443481445

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00028586387634277

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006260871887207

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00050091743469238

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00068402290344238

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00049304962158203

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00035214424133301

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00035309791564941

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00024890899658203

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0006260871887207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015149116516113

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046586990356445

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046586990356445

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00020408630371094

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00023698806762695

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034189224243164

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0004417896270752

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0005190372467041

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00029897689819336

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00027894973754883

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00027894973754883

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017690658569336

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00034189224243164

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010628700256348

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095701217651367

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00095701217651367

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00031304359436035

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00049090385437012

select count(*) as cnt from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00049090385437012

select gender from patient_title where  patient_title_id = '6' and office_id= '1' 
 Execution Time:0.00017094612121582

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010421276092529

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0010421276092529

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072813034057617

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072813034057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072813034057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072813034057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074386596679688

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00055789947509766

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00060606002807617

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00068902969360352

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00072813034057617

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00043797492980957

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00025296211242676

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00074386596679688

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0015420913696289

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0011188983917236

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00027585029602051

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00045299530029297

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00023889541625977

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00039792060852051

select count(*) as cnt from patient_registration where  patient_registration_id= '587' and  office_id= '1' 
 Execution Time:0.00026798248291016

select count(*) as cnt from patient_registration where  patient_registration_id= '587' and  office_id= '1' 
 Execution Time:0.00026798248291016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='587' and  doctors_registration.office_id= '1' 
 Execution Time:0.00078701972961426

select count(*) as cnt from patient_registration where  patient_registration_id= '587' and  office_id= '1' 
 Execution Time:0.00026798248291016

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='587' and  doctors_registration.office_id= '1' 
 Execution Time:0.00078701972961426

select fname,lname,mrdno from patient_registration where  patient_registration_id='587' and  office_id= '1' 
 Execution Time:0.00017404556274414

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00091195106506348

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.00091195106506348

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00040507316589355

select * from investigation where  investigation_id=1  and office_id= 1 and status=1 
 Execution Time:0.00059700012207031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0017640590667725

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00051307678222656

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00065994262695312

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00045585632324219

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00038909912109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.00049090385437012

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.00039482116699219

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00037384033203125

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.00028204917907715

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0003199577331543

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00018715858459473

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00056695938110352

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0010721683502197

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002295970916748

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002295970916748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002295970916748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.002295970916748

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0007481575012207

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00067305564880371

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.0005500316619873

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-20' and  '2021-09-20' and  billing_master.office_id= 1        
 Execution Time:0.0014369487762451

select CONCAT(`fname`,' ', `lname`) AS pname,doctors_registration.name as docname,DATE_FORMAT(billing_master.billing_date,'%d/%m/%Y') AS bill_date,billing_time,billing_master.invoice_number,modeofpay.name as mode,mrdno,grand_total,advanced_amount from 
			billing_master 
			left join patient_registration on billing_master.patient_registration_id=patient_registration.patient_registration_id  
			left join doctors_registration on doctors_registration.doctors_registration_id=billing_master.doctor_id 
			left join modeofpay on billing_master.modeofpay_id=modeofpay.modeofpay_id
			where billing_date between  '2021-09-20' and  '2021-09-20' and  billing_master.office_id= 1        
 Execution Time:0.0014369487762451

select CONCAT(`fname`,' ', `lname`) AS pname,gender,mrdno,ageyy,agemm,patient_registration.mobileno,doctors_registration.name as docname,
		DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_date,appointment_time, opdcharge.amount as grand_total, patient_appointment.invoice_number,insurance_company.name as insurance,opdcharge.name as particular
		from patient_registration inner join patient_appointment on patient_appointment.patient_registration_id=patient_registration.patient_registration_id 
		inner join doctors_registration on doctors_registration.doctors_registration_id=patient_appointment.doctor_id 
		inner join  opdcharge on patient_appointment.appointment_opd_charge_id=opdcharge.opdcharge_id
		left join insurance_company on patient_registration.insurance_company_id=insurance_company.insurance_company_id
		where appointment_date between  '2021-09-20' and '2021-09-20' and  patient_registration.office_id= 1      
 Execution Time:0.0024170875549316

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00096392631530762

select count(*) as cnt from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.00096392631530762

select gender from patient_title where  patient_title_id = '2' and office_id= '1' 
 Execution Time:0.0003199577331543

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065398216247559

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00065398216247559

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.0012738704681396

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033118724822998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033118724822998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033118724822998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034937858581543

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033118724822998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034937858581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038080215454102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033118724822998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034937858581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038080215454102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033118724822998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034937858581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038080215454102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037951469421387

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033118724822998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034937858581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038080215454102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037951469421387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003777027130127

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0033118724822998

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0011940002441406

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0034937858581543

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0038080215454102

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0038080215454102

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0037951469421387

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.003777027130127

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0037238597869873

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086178779602051

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086178779602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086178779602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086178779602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018379688262939

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086178779602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018379688262939

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086178779602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018379688262939

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025551319122314

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086178779602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018379688262939

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025551319122314

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015850067138672

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0086178779602051

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0007479190826416

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0036890506744385

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0018379688262939

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.0037970542907715

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0025551319122314

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.0015850067138672

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0036389827728271

select count(*) as cnt from patient_registration where  patient_registration_id= '202' and  office_id= '1' 
 Execution Time:0.0010831356048584

select count(*) as cnt from patient_registration where  patient_registration_id= '202' and  office_id= '1' 
 Execution Time:0.0010831356048584

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='202' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014381408691406

select count(*) as cnt from patient_registration where  patient_registration_id= '202' and  office_id= '1' 
 Execution Time:0.0010831356048584

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='202' and  doctors_registration.office_id= '1' 
 Execution Time:0.0014381408691406

select fname,lname,mrdno from patient_registration where  patient_registration_id='202' and  office_id= '1' 
 Execution Time:0.00044679641723633

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031495094299316

select count(*) as cnt from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.00031495094299316

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '2' and office_id= '1' 
 Execution Time:0.0002591609954834

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068187713623047

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00068187713623047

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.0003809928894043

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037503242492676

select count(*) as cnt from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00037503242492676

select opdcharge_id,name,amount from opdcharge where  appointment_type_id = '1' and office_id= '1' 
 Execution Time:0.00021600723266602

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0006411075592041

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0003662109375

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.00024700164794922

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0002601146697998

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00032997131347656

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00017499923706055

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00045514106750488

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012381076812744

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select count(*) as cnt from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00046110153198242

select gender from patient_title where  patient_title_id = '1' and office_id= '1' 
 Execution Time:0.00022697448730469

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036051273345947

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036051273345947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036051273345947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036051273345947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020899772644043

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036051273345947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020899772644043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036051273345947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020899772644043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036051273345947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020899772644043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_title_id,name from patient_title where  office_id= '1' and status=1 
 Execution Time:0.0036051273345947

select city_id,name from city where  office_id= '1' and status=1 
 Execution Time:0.0032711029052734

select referral_master_id,name from referral_master where  office_id= '1' and status=1 
 Execution Time:0.0008699893951416

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 and charge_id in (1,2) 
 Execution Time:0.0020899772644043

select patient_category_id,name from  patient_category where  office_id= '1' and status=1 
 Execution Time:0.00205397605896

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00046420097351074

select appointment_type_id,name from appointment_type where  office_id= '1' and status=1 and appointment_type_id in (select appointment_type_id from opdcharge) 
 Execution Time:0.00060701370239258

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0019280910491943

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012781620025635

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012781620025635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012781620025635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012781620025635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0012781620025635

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.00044083595275879

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00063490867614746

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00029182434082031

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00043106079101562

select count(*) as cnt from patient_registration where  patient_registration_id= '601' and  office_id= '1' 
 Execution Time:0.00046801567077637

select count(*) as cnt from patient_registration where  patient_registration_id= '601' and  office_id= '1' 
 Execution Time:0.00046801567077637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='601' and  doctors_registration.office_id= '1' 
 Execution Time:0.00094199180603027

select count(*) as cnt from patient_registration where  patient_registration_id= '601' and  office_id= '1' 
 Execution Time:0.00046801567077637

select DATE_FORMAT(appointment_date,'%d/%m/%Y') AS appointment_dated,appointment_date as adate,doctors_registration.name,patient_appointment.description from patient_appointment left join doctors_registration on patient_appointment.doctor_id=doctors_registration.doctors_registration_id   where  patient_registration_id='601' and  doctors_registration.office_id= '1' 
 Execution Time:0.00094199180603027

select fname,lname,mrdno from patient_registration where  patient_registration_id='601' and  office_id= '1' 
 Execution Time:0.00022006034851074

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012760162353516

select count(*) as cnt from investigation where  office_id= 1 and status=1 
 Execution Time:0.0012760162353516

select * from investigation where  office_id= 1 and status=1 
 Execution Time:0.00047588348388672

select * from investigation where  investigation_id=7  and office_id= 1 and status=1 
 Execution Time:0.0007319450378418

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060040950775146

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060040950775146

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060040950775146

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select patient_registration_id,mrdno,CONCAT(`fname`,' ', `lname`) AS pname from  patient_registration where  office_id= '1' and status=1 
 Execution Time:0.0022079944610596

select doctors_registration_id,name from  doctors_registration where  office_id= '1' and status=1 
 Execution Time:0.0060040950775146

select modeofpay_id ,name from  modeofpay where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select insurance_company_id,name from insurance_company where  office_id= '1' and status=1 
 Execution Time:0.00033903121948242

select charge_id,name from charge_type where  office_id= '1' and status=1 
 Execution Time:0.00040817260742188

select department_id,name from department where  office_id= '1' and status=1 
 Execution Time:0.00045108795166016

select count(*) as cnt from complaints where  name = 'fdsaf' and office_id= '1' 
 Execution Time:0.0003659725189209

select count(*) as cnt from complaints where  name = 'sdfsf' and office_id= '1' 
 Execution Time:0.0004420280456543

select count(*) as cnt from complaints where  name = 'dsfdsf' and office_id= '1' 
 Execution Time:0.00029706954956055

